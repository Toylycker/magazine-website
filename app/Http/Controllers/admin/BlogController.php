<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Image;
use App\Models\Link;
use Intervention\Image\ImageManagerStatic as Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subjects' => 'required|array',
            'name' => 'required',
            'name_ru' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'images' => 'required|array',
            'video'=>'',
            'links' => ''
        ]);
        // return $request;
        // return $subjects = $request->subjects;
        $subjects = Subject::whereIn('id', $request->subjects)->get();

        $links = $request->links?$request->links:null;

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->name_ru = $request->name_ru;
        $blog->description = $request->description;
        $blog->description_ru = $request->description_ru;
        $blog->slug = Str::slug($request->name) . '-';
        $blog->save();
        $blog->subjects()->sync($subjects);
        
        if ($links) {
            foreach ($links as $key => $values) {
                if($key === 'phones'){
                    foreach ($values as $value) {
                        if ($value) {
                            $link = new Link();
                            $link->name = 'phone';
                            $link->link = $value;
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
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
                            $link->blog_id = $blog->id;
                            $link->save();
                        }
                    }
                }
            }
        }

        $video = $request->file('video')?$request->file('video'):null;
        if ($video) {
            $name = Str::random(10) . '-' . $blog->id . '.' . $video->getClientOriginalExtension();
            // Storage::put('public/blogs/videos/' . $name, $video);
            $video->storeAs('public/blogs/videos/', $name);
            $blog->video = $name;
            $blog->update();
        }


        $images = $request->file('images');
        // images
        foreach ($images as $image) {
            $createImage = new Image();
            $createImage->blog_id = $blog->id;
            $resized = Gallery::make($image)
            // ->resize( null, 700, function ($constraint) { $constraint->aspectRatio(); } )
            ->fit(1400, 800)
            ->encode('jpg',100);
            $newImageName = Str::random(10) . '-' . $blog->id . '.' . $image->getClientOriginalExtension();
            $createImage->name = $newImageName;
            // Storage::putFileAs('public/estates/', $resized, $newImageName);
            Storage::put('public/blogs/' . $newImageName, (string) $resized);
            // $image->storeAs('public/estates/', $newImageName);
            $createImage->save();}
        
        return redirect()->route('blogs', $request->subjects[0]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::where('id', $id)
            ->firstOrFail();

        $similar = Blog::where('id', '!=', $blog->id)
            ->with(['*'])
            ->inRandomOrder()
            ->take(6)
            ->get([
                '*'
            ]);

        if (Cookie::has('store_views')) {
            $cookies = explode(",", Cookie::get('store_views'));
            if (!in_array($blog->id, $cookies)) {
                $blog->increment('viewed');
                $cookies[] = $blog->id;
                Cookie::queue('store_views', implode(",", $cookies), 60 * 24);
            }
        } 
        // else {
        //     $blog->decrement('viewed');
        //     Cookie::queue('store_views', $blog->id, 60 * 24);
        // }

        return view('front.home.blog_show', [
            'blog' => $blog,
            'similar' => $similar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Blog::where('slug', $slug)->with([ 'links', 'subjects'])->first();
        $subjects = Subject::get();

        return view('admin.blogs.edit', [
            'post' => $post,
            'subjects' => $subjects
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id){
        $request->validate([
            'subjects' => 'required|array',
            'name' => 'required',
            'name_ru' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'images' => 'array',
            'video'=>'',
            'links' => ''
        ]);

    $post = Blog::findOrFail($id);
    $subjects = Subject::whereIn('id', $request->subjects)->get();
    $post->links()->delete();
    $post->update($request->all());
    $post->subjects()->sync($subjects);


    $links = $request->links?$request->links:null;
    if ($links) {
        foreach ($links as $key => $values) {
            if($key === 'phones'){
                foreach ($values as $value) {
                    if ($value) {
                        $link = new Link();
                        $link->name = 'phone';
                        $link->link = $value;
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
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
                        $link->blog_id = $post->id;
                        $link->save();
                    }
                }
            }
        }
    }

    if($request->images){
        $images = $request->file('images');
        $files =  $post->images->pluck('name');
        foreach ($files as $file_name) {
            Storage::delete('public/blogs/' . $file_name);
        }
        $post->images()->delete();
        // images
        foreach ($images as $image) {
            $createImage = new Image();
            $createImage->blog_id = $post->id;
            $resized = Gallery::make($image)
            // ->resize( null, 700, function ($constraint) { $constraint->aspectRatio(); } )
            ->fit(1400, 800)
            ->encode('jpg',100);
            $newImageName = Str::random(10) . '-' . $post->id . '.' . $image->getClientOriginalExtension();
            $createImage->name = $newImageName;
            // Storage::putFileAs('public/estates/', $resized, $newImageName);
            Storage::put('public/blogs/' . $newImageName, (string) $resized);
            // $image->storeAs('public/estates/', $newImageName);
            $createImage->save();}
    }

    $video = $request->file('video')?$request->file('video'):null;
        if ($video) {
            Storage::delete('public/blogs/videos/' . $post->video);
            $name = Str::random(10) . '-' . $post->id . '.' . $video->getClientOriginalExtension();
            // Storage::put('public/blogs/videos/' . $name, $video);
            $video->storeAs('public/blogs/videos/', $name);
            $post->video = $name;
            $post->update();
        }

    return redirect()->route('blogs', '0');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Blog::where('slug', $slug);
        if ($post) {
            $post->delete();
            $success = trans('app.delete-success');
            return redirect()->back()->with(['message'=>$success]);
        }

        $message = trans('app.not_found');
        return redirect()->back()->with(['message'=>$message]);
        
    }
}
