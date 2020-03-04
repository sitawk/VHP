<?php namespace Codersocean\Honorpins\Components;

use Cms\Classes\ComponentBase;
use Auth;
use Redirect;
class AdminAuth extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AdminAuth Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
      $user =Auth::getUser();
       if($user){
            $code = $user->getGroups();
            if(count($code) == 0){
              Auth::logout();
              $redrect= '/admin/login';
                   return Redirect::to($redrect);
            }
              foreach ($code as $group) {
         if($group->code =! 'admin'){
           Auth::logout();
          $redrect= '/admin/login';
           return Redirect::to($redrect);

          }
      }
      }else{
      $redrect= '/admin/login';
           return Redirect::to($redrect);

      }
    }
}
