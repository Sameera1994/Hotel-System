<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class loginController extends BaseController {
   public function index(){
      $user = User_register::selectRow("User_name, Hint")->get();
      $data = [
         'user' = $user 
      ];

      return view('fetch.index',$data);
   }
}
?>