<?php namespace Codersocean\Honorpins\Components;

use Cms\Classes\ComponentBase;
use Codersocean\Honorpins\Models\Categories;
use Codersocean\Honorpins\Models\Certificate;
use Codersocean\Honorpins\Models\Holder;
use Codersocean\Honorpins\Models\HolderPins;
use Codersocean\Honorpins\Models\Organization;
use Codersocean\Honorpins\Models\Pin;
use Codersocean\Honorpins\Models\Cart;
use Vdomah\Excel\Classes\Excel;
use Input;
use Auth;
use Storage;
use Session;
class Dashboard extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Dashboard Component',
            'description' => 'No description provided yet...'
        ];
    }
    public function onSaveFile()
    {
      $certificate = post('certificate');
      Session::put('certificate',post('certificate'));
        $file_name = Input::file('excelfile')->getClientOriginalName();
        $file = Input::file('excelfile');
        Storage::put(
            $file_name,
            file_get_contents(Input::file('excelfile')->getRealPath())
        );

        Excel::excel()->load(base_path() . '/storage/app/book.xlsx', function($reader) {
              $user = Auth::getUser();

              //=========== GET THE Current CORPORATE ADMIN =======================

              $array = array();
              $results = $reader->get();
              $results = $reader->all();
              // echo count($results);
              $certificate = Session::get('certificate');
              foreach ( $results as $result)
              {

                  if($result->email == null){
                    Session::put('error',1);
                    Session::put('errormsg','File Error: value in email column is empty in one row');
                    break;
                    return false;

                  }elseif($result->phone == null){
                    $errormsg = 'File Error: value in phone column is empty in one row';
                    Session::put('error',1);
                    Session::put('errormsg',$errormsg);
                     break;
                      return false;


                  }elseif($result->registration_number == null){

                    $errormsg = 'File Error: value in registration_number column is empty in one row';
                    Session::put('error',1);
                    Session::put('errormsg',$errormsg);
                     break;
                      return false;

                  }elseif($result->full_name == null){

                    $errormsg = 'File Error: value in full_name column is empty in one row';
                    Session::put('error',1);
                    Session::put('errormsg',$errormsg);
                    break;
                      return false;

                  }elseif($result->start_date == null){
                    $errormsg = 'File Error: value in start_date column is empty in one row';
                    Session::put('error',1);
                    Session::put('errormsg',$errormsg);
                     break;
                      return false;

                  }elseif($result->end_date == null){
                    $errormsg = 'File Error: value in end_date column is empty in one row';
                    Session::put('error',1);
                    Session::put('errormsg',$errormsg);
                    break;
                      return false;

                  }else{
                    $checkcart = Cart::where('certificate_id',$certificate)->where('email',$result->email)->where('name',$result->full_name)->where('reg_number',$result->registration_number)->where('user_id',$user->id)->count();
                    if($checkcart == 0){
                      array_push($array,$result);

                    }


                  }
              }
              // echo count($array);
              Session::put('result',$array);

          });

  $certificate = Session::get('certificate');
  $error = Session::get('error');
  $errormsg = Session::get('errormsg');
  $getresut = Session::get('result');
  // echo $getresut;
  if($error == 1){
    $this->page['error'] = $errormsg;
    Session::forget('certificate');
    Session::forget('error');
    Session::forget('errormsg');
    Session::forget('resut');
    return [
    '#csverror' => $this->renderPartial('profile/csverror')
    ];
  }else{
    // echo 'hello';
    foreach ( $getresut as $result)
    {
      $user = Auth::getUser();
      $addorder  = new Cart;
      $addorder->name=$result->full_name;
      $addorder->email=$result->email;
      $addorder->phone=$result->phone;
      $addorder->start_date=$result->start_date;
      $addorder->end_date=$result->end_date;
      $addorder->reg_number=$result->registration_number;
      $addorder->user_id=$user->id;
      $thiscertificate = Certificate::where('id',$certificate)->first();
      $addorder->certificate_id=$certificate;
      $addorder->pin_id=$thiscertificate->pin_id;
      $addorder->org_id=$thiscertificate->org_id;
      $addorder->save();
  }
      $user = Auth::getUser();
  $cartitems= Cart::where('user_id',$user->id)->get();
$this->page['cartitems']  =   $cartitems;
$this->page['unitprice'] = 5;
$this->page['tax'] = 2;
Session::forget('certificate');
Session::forget('error');
Session::forget('errormsg');
Session::forget('result');
return [
'#orderdata' => $this->renderPartial('profile/orderdata'),
'#orderbilldata' => $this->renderPartial('profile/orderbilldata'),
];
  }




    }

    public function onReadFile($file,$file_name,$certificate)
    {
      // echo base_path();

    }

    public function onAddCertificate(){
      $addcertificate = new Certificate;
      $addcertificate->url = post('url');
      $addcertificate->title = post('title');
      $addcertificate->category_id = post('category');
      $addcertificate->category_id = post('category');
      $addcertificate->pin_id = post('pin');
      $addcertificate->desc = post('desc');
      $addcertificate->org_id = post('org_id');
      $addcertificate->save();
      $this->page['addcertificate'] = 1;
      $this->page['thisorganization'] = Organization::where('id',post('org_id'))->first();
      $this->page['user'] = Auth::getuser();

    $this->page['addpin'] = 0;
        $this->page['categories'] = Categories::get();
            $this->page['user'] = $user = Auth::getuser();
      return [
      '#createcertificatebutton' => $this->renderPartial('userdashboard/createcertificatebutton'),
      '#completecertificate' => $this->renderPartial('profile/addcertificate'),
          '#createcertificatebutton' => $this->renderPartial('userdashboard/createcertificatebutton'),
          '#organizationcertificate' => $this->renderPartial('profile/organizationcertificates'),
      ];

    }

    public function defineProperties()
    {
        return [];
    }
}
