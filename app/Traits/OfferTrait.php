<?php

namespace App\Traits;



Trait OfferTrait
{
    function saveImage($request){

        // save image in folder
        $file_extension = $request -> image -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'images/offers';
        $request -> image -> move($path,$file_name);

        return $file_name;
   }
}
