<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function user_insert(Request $req){
    	$User_name = $req->input('user_name');
    	$Password1 = $req->input('password1');
    	$Password2 = $req->input('password2');
    	$Hint      = $req->input('hint');
    	$Password = "";
    	$Val = 0;
    	if ($Password1 == $Password2) {
    		$Password = $Password2;
    		$Val = 1;
    	}
    	else{
    		echo "Password does not match... plz re enter password...";
    	}

    	if ($Val == 1) {
    		$data = array('User_name' =>$User_name,'Password'=>$Password,'Hint'=>$Hint);
    		DB::table('user_register')->insert($data);

    		echo "Your data successfully inserted to the Database..";
    	}
    	
    }
}