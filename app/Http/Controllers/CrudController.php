<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offert;
use Illuminate\Support\Facades\Validator;

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

    // public function Store(){
    //     // return Offert::select('id','name')->get();

    //     Offert::create([
    //         'name' => 'offer3' , 
    //         'price' => '400.00' , 
    //         'details' => 'offer3',
    //     ]);
    // }

    public function Create(){
        return view('offers.create');
    }

    public function Store(Request $request){
        // return $request;

        //Validate data befor insert to database
        $rules= $this ->getRules();
        $messages= $this ->getMessages();

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator -> fails()){
            return $validator -> errors();
        }

        Offert::create([
            'name'    =>$request-> name , 
            'price'   =>$request-> price , 
            'details' =>$request-> details,
         ]);

         return 'save successfly';
    }

    protected function getMessages(){

        return $messages=[
            'name.required' => 'Le nom est obligatoire',
            'name.max' => 'max 100 caracteres',
            'name.unique' => 'Le nom est trouvé, ressayer',
            'price.required' => 'Le prix est obligatoire',
            'price.numeric' => 'Le prix est un reel attention!',
            'details.required' => 'Les details est obligatoire',
        ];
    }

    protected function getRules(){

        return $rules=[
            'name'   => 'required|max:100|unique:offers,name',
            'price'  => 'required|numeric',
            'details'=> 'required',
        ];
    }
}
