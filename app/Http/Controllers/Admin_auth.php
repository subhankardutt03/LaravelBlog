<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Admin_auth extends Controller
{
    function login(){
       return view('admin/login');
    }

    function login_submit(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $result = DB::table('users')
                ->where('email',$email)
                ->where('password',$password)
                ->get();

        // echo '<pre/>';
        // print_r($result);

        if(isset($result[0]->id)){
            if($result[0]->status==1){

                $request->session()->put('BLOG_USER_ID',$result[0]->id);
                $request->session()->put('BLOG_USER_NAME',$result[0]->name);

                return redirect('/admin/post/list');

            }
            else{
                 $request->session()->flash('msg','Account Deactivated');
                return redirect('/admin/login');
            }
        }

        else{
             $request->session()->flash('msg','please enter valid login details');
            return redirect('/admin/login');
        }
    }

    function post_list(){

        $data['result']=DB::table('posts')->get();
        // echo "<pre/>";
        // print_r($data['result']);
        // die();
        return view('/admin/post/list',$data);
    } 

    function post_add(){
        return view('admin/post/add');
    }

    function logout(){
        session()->forget('BLOG_USER_ID');
        return redirect('/admin/login');
    }

    function add_submit(Request $request){

        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts',
            'short_desc'=>'required',
            'long_desc'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
            'post_date'=>'required'
        ]);

        // $image=$request->file('image')->store('public/post');

        $image=$request->file('image');
        $ext = $image->extension();
        $file =time().'.'.$ext;
        $image->storeAs('/public/post',$file);

       $data=array(
           'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
           'short_desc'=>$request->input('short_desc'),
           'long_desc'=>$request->input('long_desc'),
        //    'image'=>$image,
            'image'=>$file,
           'post_date'=>$request->input('post_date'),
           'status'=>1,
           'added_on'=>date('Y-m-d h:i:s')
       );

       DB::table('posts')->insert($data);
       $request->session()->flash('msg','Post Saved Successfully');
       return redirect('/admin/post/list');
    }

    function post_delete(Request $request,$id){
        DB::table('posts')->where('id',$id)->delete();
       $request->session()->flash('msg','Post Deleted');
       return redirect('/admin/post/list');
    }

    function post_edit(Request $request,$id){
        $data['result']=DB::table('posts')->where('id',$id)->get();
        return view('admin/post/edit',$data);
    }

    function post_update(Request $request,$id){

        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts',
            'short_desc'=>'required',
            'long_desc'=>'required',
            'image'=>'mimes:jpg,jpeg,png',
            'post_date'=>'required'
        ]);

         $data=array(
           'title'=>$request->input('title'),
           'slug'=>$request->input('slug'),
           'short_desc'=>$request->input('short_desc'),
           'long_desc'=>$request->input('long_desc'),
           'post_date'=>$request->input('post_date'),
           'status'=>1,
           'added_on'=>date('Y-m-d h:i:s')
       );

       if($request->hasfile('image')){

        // $image=$request->file('image')->store('public/post');

        $image=$request->file('image');
        $ext = $image->extension();
        $file =time().'.'.$ext;
        $image->storeAs('/public/post',$file);

        $data['image']=$file;

      }

       DB::table('posts')->where('id',$id)->update($data);
       $request->session()->flash('msg','Post Updated Successfully');
       return redirect('/admin/post/list');
    }
}
