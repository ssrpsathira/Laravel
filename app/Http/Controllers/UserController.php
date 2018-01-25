<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function RegisterUser(Request $request)
    {
        $table = new Customer();

        $table->FName = $request->input('first_name');
//        $table->MName = $request->input('mid_name');
        $table->LName = $request->input('last_name');
        $table->Username = $request->input('email');
        $table->Password = bcrypt($request->input('password'));
        $table->Contactno = $request->input('contact_no');
        $table->Companyregno = $request->input('company_reg_no');
        $table->Comapny_Name = $request->input('company_name');

        $table->save();
        return "data saved";
    }
}
