<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offert;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RequestOffer;
use LaravelLocalization;

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

    public function getAllOffers(){
        $offers= Offert::select(
        'id',
        'price',
        'name_' .LaravelLocalization::getCurrentLocale().' as name',
        'details_' .LaravelLocalization::getCurrentLocale().' as details',
        )->get(); 
        //get id, name ,price, details suivant la langue selectionner
        return view('offers.all',compact('offers'));
        // return Offert::get();
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

    public function Store(RequestOffer $request){
        // return $request;

        //Validate data befor insert to database
        // $rules= $this ->getRules();
        // $messages= $this ->getMessages();

        // $validator = Validator::make($request->all(),$rules,$messages);

        // if($validator -> fails()){
        //     return redirect()-> back() ->withErrors($validator) -> withInputs($request->all());
        // }

        Offert::create([
            'name_ar'    =>$request-> name_ar , 
            'name_en'    =>$request-> name_en ,
            'price'   =>$request-> price , 
            'details_ar' =>$request-> details_ar,
            'details_en' =>$request-> details_en,
         ]);

         return redirect()-> back() ->with(['success' =>'Offer est bien ajouter, BIENVENUE!']);
    }

    // protected function getMessages(){

    //     return $messages=[
    //         'name.required' => __('messages.offer name required'),
    //         'name.max' => __('messages.offer name max'),
    //         'name.unique' =>__('messages.offer name unique'),
    //         'price.required' => __('messages.offer price required'),
    //         'price.numeric' =>  __('messages.offer price numeric'),
    //         'details.required' => __('messages.offer details required'),
    //     ];
    // }

    // protected function getRules(){

    //     return $rules=[
            // 'name'   => 'required|max:100|unique:offers,name',
            // 'price'  => 'required|numeric',
            // 'details'=> 'required',
    //     ];
    // }
}
