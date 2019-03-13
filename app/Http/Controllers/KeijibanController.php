<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeijibanController extends Controller
{
   public function index(){
       return view('keijibanlaravel.index');
   }
   public function post(Request $request){
       $msg = $request->msg;
       $name = $request->name;
       $data =[
           'name' => $name.'さんの投稿です。',
           'msg' => $msg,
       ];
       
       return view('keijibanlaravel.index',$data);
   }
}
