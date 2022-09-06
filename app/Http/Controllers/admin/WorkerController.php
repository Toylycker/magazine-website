<?php

namespace App\Http\Controllers\admin;

use App\Models\Worker;
use App\Models\Link;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Gallery;


class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workers = Worker::orderBy('id', 'asc')
        ->with( 'links')
        ->get();

        return View('admin.workers.index', compact('workers'));
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

    public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'name_ru' => 'required',
        'description' => 'required',
        'description_ru' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'links' => ''
    ]);
    // return $request;
    $links = $request->links?$request->links:null;
    

    $worker = new Worker();
    $worker->name = $request->name;
    $worker->name_ru = $request->name_ru;
    $worker->description = $request->description;
    $worker->description_ru = $request->description_ru;
    $worker->save();

    if ($links) {
        foreach ($links as $key => $values) {
            if($key === 'phones'){
                foreach ($values as $value) {
                    if ($value) {
                        $link = new Link();
                        $link->name = 'phone';
                        $link->link = $value;
                        $link->worker_id = $worker->id;
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
                        $link->worker_id = $worker->id;
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
                        $link->worker_id = $worker->id;
                        $link->sort_order = 3;
                        $link->save();
                    }
                }
            }elseif($key === 'imos'){
                foreach ($values as $value) {
                    if ($value) {
                        $link = new Link();
                        $link->name = 'imo';
                        $link->link = $value;
                        $link->worker_id = $worker->id;
                        $link->sort_order = 4;
                        $link->save();
                    }
                }
            }elseif($key === 'websites'){
                foreach ($values as $value) {
                    if ($value) {
                        $link = new Link();
                        $link->name = 'website';
                        $link->link = $value;
                        $link->worker_id = $worker->id;
                        $link->sort_order = 5;
                        $link->save();
                    }
                }
            }elseif($key === 'maps'){
                foreach ($values as $value) {
                    if ($value) {
                        $link = new Link();
                        $link->name = 'map';
                        $link->link = $value;
                        $link->sort_order = 6;
                        $link->worker_id = $worker->id;
                        $link->save();
                    }
                }
            }
        }
    }
    $image = $request->file('image');
    // images
        $resized = Gallery::make($image)
        // ->resize(400, null, function ($constraint) { $constraint->aspectRatio(); } )
        // ->fit(400)
        ->encode('jpg',100);
        $newImageName = Str::random(10) . '-' . $worker->id . '.' . $image->getClientOriginalExtension();
        $worker->image = $newImageName;
        // Storage::putFileAs('public/estates/', $resized, $newImageName);
        Storage::put('public/workers/' . $newImageName, (string) $resized);
        // $image->storeAs('public/estates/', $newImageName);
        $worker->update();

        return redirect()->back();
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Worker::findOrFail($id);
        if ($worker) {
            $worker->delete();
            return redirect()->back()->with(['message'=>'success']);
        }

        return redirect()->back()->with(['message'=>'no such worker']);
    }
}
