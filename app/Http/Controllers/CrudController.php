<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offert;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function getOffers(){
        // return Offert::select('id','name')->get(); Selection id, name 
        return Offert::get();
    }

    public function Store(){
        // return Offert::select('id','name')->get();

        Offert::create([
            'name' => 'offer3' , 
            'price' => '400.00' , 
            'details' => 'offer3',
        ]);
    }
}
