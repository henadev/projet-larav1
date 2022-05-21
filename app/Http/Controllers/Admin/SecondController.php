<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){
        $this -> middleware('auth')-> except('showString2');
    }


    public function showString0(){
        return 'je reveillé a 3h de matin 0';
    }
    public function showString1(){
        return 'je reveillé a 3h de matin 1';
    }
    public function showString2(){
        return 'je reveillé a 3h de matin 2';
    }
    public function showString3(){
        return 'je reveillé a 3h de matin 3';
    }
};
