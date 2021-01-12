<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'permission' => 'required|in:private,public,'
          ]);

            foreach($request->file('imageFile') as $file)
            {
              $disk = Storage::disk('gcs');
              $image = $disk->put('images', $file);
              Image::create([
                'user_id' => Auth::id(),
                'filename' => $image,
                'permission' => $request->permission,
                'url' => $disk->url($image)
             ]);
            }  
                
          return response()->json(['message' =>'File Uploaded Success']);
    }

    public function getImages()
    { 
       $images = Cache::remember('images', 60 * 60 * 24, function () {
            return Image::all();
        });

        return response()->json(['images' => $images]);
    }
}
