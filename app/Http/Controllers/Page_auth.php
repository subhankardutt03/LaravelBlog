<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Page_auth extends Controller
{
    function page_list(){

        $data['result']=DB::table('pages')->get();
        return view('/admin/page/list',$data);
    } 

    function page_add(){
        return view('admin/page/add');
    }

   

    function add_submit(Request $request){

        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:pages',
            'description'=>'required',
            
        ]);

        $data=array(
           'name'=>$request->input('name'),
           'slug'=>$request->input('slug'),
           'description'=>$request->input('description'),
           'status'=>1,
           'added_on'=>date('Y-m-d h:i:s')
       );

       DB::table('pages')->insert($data);
       $request->session()->flash('msg','Page Saved Successfully');
       return redirect('/admin/page/list');
    }

    function page_delete(Request $request,$id){
        DB::table('pages')->where('id',$id)->delete();
       $request->session()->flash('msg','Page Deleted');
       return redirect('/admin/page/list');
    }

    function page_edit(Request $request,$id){
        $data['result']=DB::table('pages')->where('id',$id)->get();
        return view('admin/page/edit',$data);
    }

    function page_update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
            
        ]);

         $data=array(
           'name'=>$request->input('name'),
           'slug'=>$request->input('slug'),
           'description'=>$request->input('description'),
           'status'=>1,
           'added_on'=>date('Y-m-d h:i:s')
       );

       DB::table('pages')->where('id',$id)->update($data);
       $request->session()->flash('msg','Page Updated Successfully');
       return redirect('/admin/page/list');
    }
}
