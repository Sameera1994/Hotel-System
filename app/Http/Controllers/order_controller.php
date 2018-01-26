<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use DB;

class order_controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function user_insert(Request $req){
        $Cus_id = $require->input('customer_id');
    	$Title = $req->input('title');
    	$Quantity = $req->input('qty');
    	$Unit_price = $req->input('price');
    	$Discount  = $req->input('dis');
    	$Amount = $req->input('amount');

    	$data = array('customer_id'=>$Cus_id,
                      'product_id' =>$Title,
                      'quantity'=>$Quantity,
                      'unitprice'=>$Unit_price,
                      'discount'=>$discount,
                      'amount'=>$Amount
                      );
        
    		DB::table('orderdetails')->insert($data);

    		echo "Your data successfully inserted to the Database..";
    	
    }
}