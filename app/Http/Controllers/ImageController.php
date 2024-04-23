<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageStoreRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view("image.create");
    }
    public function index()
    {
        $records = Image::all();
        return view("image.index",compact('records'));
    }

    public function store(ImageStoreRequest $request)
    {
        $imageData = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $imageData['image'] = $imageName;
        }

        $record = Image::create($imageData);
        if($record){
           return redirect()->route('image.index');

        }else{
            return redirect()->route('image.index');

        }
    }
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('image.index');
    }
}
