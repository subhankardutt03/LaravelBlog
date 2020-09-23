<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Contact_auth extends Controller
{
   function contact_list(){
    $data['result']=DB::table('contacts')->get();
        return view('/admin/contact/list',$data);
   }
}
