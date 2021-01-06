<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);

      
          $images = [];
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $name = time() . $file->getClientOriginalName();
                  $request->permit == '1' ? $file->storeAs('images', $name) : $file->storeAs('images', $name,'s3');
                  $images[] = $name;  
              }             
          }

          foreach ($images as $image){
            Image::create([
                'user_id' => Auth::id(),
                'filename' => $image,
                'url' => Storage::disk('s3')->url($image)
            ]);
          }
          return response()->json(['message' =>'File Uploaded Success']);
    }
}
