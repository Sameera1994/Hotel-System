<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class loginController extends BaseController
{
   public function login(Request $req)
   {
   		$username = $req->input('user_name');
   		$password = $req->input('password');

   		$checkLogin = DB::table('user_register')->where(['User_name'=>$username,'Password'=>$password])->get();
   		if (count($checkLogin) >0) {
   			return redirect('/invoiceform');
   		}
   		else{
   			echo "Login Faield wrong Data Password";
   		}
   }

}

?>