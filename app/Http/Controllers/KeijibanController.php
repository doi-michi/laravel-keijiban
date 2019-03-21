<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeijibanController extends Controller
{
   public function index(){
       return view('keijiban_laravel.index');
   }
   public function store(Request $request){
       $msg = $request->msg;
       $name = $request->name;
       $data =[
           'name' => $name.'さんの投稿です。',
           'msg' => $msg,
       ];
       
       return view('keijiban_laravel.index',$data);
   }
}
