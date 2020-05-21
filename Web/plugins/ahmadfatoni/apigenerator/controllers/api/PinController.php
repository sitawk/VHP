<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Codersocean\Honorpins\Models\HolderPins;
class PinController extends Controller
{
	protected $HolderPins;

    protected $helpers;

    public function __construct(HolderPins $HolderPins, Helpers $helpers)
    {
        parent::__construct();
        $this->HolderPins    = $HolderPins;
        $this->helpers          = $helpers;
    }

    public function index(){

        $data = $this->HolderPins->all()->toArray();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function show($id){

        $data = $this->HolderPins->where('id',$id)->first();

        if( count($data) > 0){

            return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);

        }

        $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);

    }

    public function getpin(Request $request){
			if(!isset($request['private_code'])){
				return $this->helpers->apiArrayResponseBuilder(400, 'Private code is required!', ['detail' => 'private_code field is missing']);
			}
			if(!isset($request['public_code'])){
				return $this->helpers->apiArrayResponseBuilder(400, 'Public code is required!', ['detail' => 'public_code field is missing']);
			}
			if(!isset($request['email'])){
				return $this->helpers->apiArrayResponseBuilder(400, 'Email is required!', ['detail' => 'email field is missing']);
			}



				if (filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
					$pin = HolderPins::where('private_access_code',$request['private_code'])->where('public_access_code',$request['public_code'])->where('email',$request['email'])->first();
					$object = (object) [
					 'holder_name' => $pin->full_name,
					 'holder_email' => $pin->email,
					 'holder_phone' => $pin->phone,
					 'certificate_title' => $pin->certificate->title,
					 'certificate_registration_number' => $pin->reg_number,
					 'certificate_url' => $pin->certificate->url,
					 'certificate_type' => $pin->certificate->category->name,
					 'certificate_description' => $pin->certificate->desc,
					 'issue_date' => $pin->start_date,
					 'expire_date' => $pin->end_date,
					 'pin_title' => $pin->pin->title,
					 'pin_logo' => 'http://www.honorpins.com'.$pin->pin->image,
					 'pin_html_template' =>$pin->pin->template,
					 'organization_name' => $pin->organization->org_name,
					 'organization_email' => $pin->organization->org_email,
					 'organization_website' => $pin->organization->website,
					 'organization_phone' => $pin->organization->phone,
					 'organization_logo' => 'http://www.honorpins.com'.$pin->organization->logo,
				 ];

				 if($pin){
					 if($pin->pin_status != 0){
							 if($pin->availbility != 0){
	  						 return $this->helpers->apiArrayResponseBuilder(200, 'Success: Pin is valid', $object);
	  					 }else{
	  						 return $this->helpers->apiArrayResponseBuilder(400, 'Your Pin is disabled!', ['detail' => 'Kindly enable your pin from the dashboard']);
	  					 }
					 }else{
						 return $this->helpers->apiArrayResponseBuilder(400, 'Your Pin is not purchased!', ['detail' => 'Kindly purchased the pin to enable it']);
					 }

				 }else{
					 return $this->helpers->apiArrayResponseBuilder(400, 'Your Pin is not found!', ['detail' => 'No Pin is registered on given email!']);

				 }

				} else {
					return $this->helpers->apiArrayResponseBuilder(400, 'Your Email is not valid!', ['detail' => 'email format is not valid!']);

				}


		}
    public function store(Request $request){

    	$arr = $request->all();

        while ( $data = current($arr)) {
            $this->HolderPins->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), $this->HolderPins->rules);

        if( $validation->passes() ){
            $this->HolderPins->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->HolderPins->id]);
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->HolderPins->where('id',$id)->update($data);

        if( $status ){

            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->HolderPins->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->HolderPins->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }

}
