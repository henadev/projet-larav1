<?php

namespace App\Traits;



Trait OfferTrait
{
    function saveImage($image,$folder){

        // save image in folder
        $file_extension = $image -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;   //'images/offers':$folder
        $image -> move($path,$file_name);
        //$request -> image:$image

        return $file_name;
   }
}
