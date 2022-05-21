<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

 public function getUsers(){
     return 'Hana';
 }

 public function getIndex(){
    // $data['age']= '19';
    // $data['name']='mayssa ben hssin';

    $obj=new \stdClass;
    $obj->name='nawar';
    $obj->age= 45;

    $data = ['note','Haroun'];
    return view('welcome',compact('data'));
}
    
}
