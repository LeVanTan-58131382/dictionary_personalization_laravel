<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function save(Request $request){
        $name = $request->name;
        $image = $request->image;

        $image = new Image();
        $image->name = $name;
        $image->image = $image;
        $image->save();
        
    }
}
