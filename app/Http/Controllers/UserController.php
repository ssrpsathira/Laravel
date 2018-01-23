<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function RegisterUser(Request $request){

    	$table = new User();


    	$table->first_name 		= $request->input['first_name'];
    	$table->mid_name 		= $request->input['mid_name'];
    	$table->last_name 		= $request->input['last_name'];
    	$table->email 			= $request->input['email'];
    	$table->password 		= bcrypt($request->input['password']);
    	$table->contact_no		= $request->input['contact_no'];
    	$table->company_reg_no	= $request->input['company_reg_no'];
    	$table->company_name	= $request->input['company_name'];
    	
    	$table->save();
    	return "data saved";
    	

    }



}
