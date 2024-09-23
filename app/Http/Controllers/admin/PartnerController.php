<?php

namespace App\Http\Controllers\admin;

use App\Models\Partner;
use App\Models\Category;
use App\Models\Image;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Gallery;


class PartnerController extends Controller
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
            'category_id' => 'required|integer',
            'name' => 'required',
            'name_ru' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'sort_order' => 'required',
            'images' => 'required|array',
            'links' => ''
        ]);
        // return $request;
        $category = Category::findOrFail($request->category_id);
        $links = $request->links?$request->links:null;
        

        $partner = new Partner();
        $partner->category_id = $category->id;
        $partner->name = $request->name;
        $partner->name_ru = $request->name_ru;
        $partner->description = $request->description;
        $partner->description_ru = $request->description_ru;
        $partner->sort_order = $request->sort_order;
        $partner->save();

        if ($links) {
            foreach ($links as $key => $values) {
                if($key === 'phones'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'phone';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 1;
                            $link->save();
                        }
                    }
                }elseif($key === 'instagrams'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'instagram';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 2;
                            $link->save();
                        }
                    }
                }elseif($key === 'tiktoks'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'tiktok';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 3;
                            $link->save();
                        }
                    }
                }elseif($key === 'mails'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'mail';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 4;
                            $link->save();
                        }
                    }
                }elseif($key === 'imos'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'imo';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 5;
                            $link->save();
                        }
                    }
                }elseif($key === 'websites'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'website';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 6;
                            $link->save();
                        }
                    }
                }elseif($key === 'maps'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'map';
                            $link->link = $value;
                            $link->sort_order = 7;
                            $link->partner_id = $partner->id;
                            $link->save();
                        }
                    }
                }
            }
        }
        $images = $request->file('images');
        // images
        foreach ($images as $image) {
            $createImage = new Image();
            $createImage->partner_id = $partner->id;
            $resized = Gallery::make($image)
            // ->resize(400, null, function ($constraint) { $constraint->aspectRatio(); } )
            // ->fit(400)
            ->encode('jpg',80);
            $newImageName = Str::random(10) . '-' . $partner->id . '.' . $image->getClientOriginalExtension();
            $createImage->name = $newImageName;
            // Storage::putFileAs('public/estates/', $resized, $newImageName);
            Storage::put('public/partners/' . $newImageName, (string) $resized);
            // $image->storeAs('public/estates/', $newImageName);
            $createImage->save();}

            return redirect()->route('partners', ['c'=>$request->category_id,
            'search'=> $partner->name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::where('id', $id)->firstOrFail();
        $categories = Category::get();

        return view('admin.partners.edit', compact(['partner', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required',
            'name_ru' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'sort_order' => 'required',
            'images' => 'array',
            'links'=>''
        ]);

        $partner = Partner::findOrFail($id);
        $partner->links()->delete();
        $partner->update($request->all());


        $links = $request->links?$request->links:null;
        if ($links) {
            foreach ($links as $key => $values) {
                if($key === 'phones'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'phone';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 1;
                            $link->save();
                        }
                    }
                }elseif($key === 'tiktoks'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'tiktok';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 3;
                            $link->save();
                        }
                    }
                }elseif($key === 'instagrams'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'instagram';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 2;
                            $link->save();
                        }
                    }
                }elseif($key === 'mails'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'mail';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 4;
                            $link->save();
                        }
                    }
                }elseif($key === 'imos'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'imo';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 5;
                            $link->save();
                        }
                    }
                }elseif($key === 'websites'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'website';
                            $link->link = $value;
                            $link->partner_id = $partner->id;
                            $link->sort_order = 6;
                            $link->save();
                        }
                    }
                }elseif($key === 'maps'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'map';
                            $link->link = $value;
                            $link->sort_order = 7;
                            $link->partner_id = $partner->id;
                            $link->save();
                        }
                    }
                }
            }
        }

        if($request->images){
            $images = $request->file('images');
            $files =  $partner->images->pluck('name');
            foreach ($files as $file_name) {
                Storage::delete('public/partners/' . $file_name);
            }
            $partner->images()->delete();
        // images
        foreach ($images as $image) {
            $createImage = new Image();
            $createImage->partner_id = $partner->id;
            $resized = Gallery::make($image)
            // ->resize(400, null, function ($constraint) { $constraint->aspectRatio(); } )
            // ->fit(400)
            ->encode('jpg',80);
            $newImageName = Str::random(10) . '-' . $partner->id . '.' . $image->getClientOriginalExtension();
            $createImage->name = $newImageName;
            // Storage::putFileAs('public/estates/', $resized, $newImageName);
            Storage::put('public/partners/' . $newImageName, (string) $resized);
            // $image->storeAs('public/estates/', $newImageName);
            $createImage->save();}

        }

        return redirect()->route('partners', ['c'=>$request->category_id,
        'search'=> $partner->name]);
        



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $partner = Partner::findOrFail($id);
        $files =  $partner->images->pluck('name');

        foreach ($files as $file_name) {
            Storage::delete('public/partners/' . $file_name);
        }
        $partner->delete();
        

        return redirect()->back();
    }
}

// $images = $request->file('image');
// // images
// foreach ($images as $image) {
//     $createImage = new Image();
//     $createImage->estate_id = $estate->id;
//     $resized = Gallery::make($image)
//     // ->resize(400, null, function ($constraint) { $constraint->aspectRatio(); } )
//     ->fit(400)
//     ->encode('jpg',80);
//     $newImageName = Str::random(10) . '-' . $estate->id . '.' . $image->getClientOriginalExtension();
//     $createImage->name = $newImageName;
//     // Storage::putFileAs('public/estates/', $resized, $newImageName);
//     Storage::put('public/estates/' . $newImageName, (string) $resized);
//     // $image->storeAs('public/estates/', $newImageName);
//     $createImage->save();
// }