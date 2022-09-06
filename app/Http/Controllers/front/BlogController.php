<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Response;
use App\Models\Blog;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BlogController extends Controller
{
    public function blogs($id)
    {
        $f_subject = $id ? Subject::findOrFail($id) ? $id : 0 : 0;
        $posts = Blog::when($f_subject, function ($query) use ($f_subject) {
            return $query->where(function ($query1) use ($f_subject) {
                $query1->whereHas('subjects', function ($query) use ($f_subject) {
                    $query->where('subject_id', $f_subject);
                });
            });
        })
            ->orderBy('id', 'desc')
            ->with('images')
            ->paginate(9)->withQueryString();
        $subjects = Subject::orderBy("id")->get();
        return view('front.blog.index', compact(['posts', 'subjects', 'f_subject']));
    }

    public function show($slug)
    {
        $post = Blog::where('slug', $slug)
            ->firstOrFail();

            $similar = Blog::whereNot('id', $post->id )->take(6)
            ->with(['images'])
            ->inRandomOrder()
            ->get();

        if (Cookie::has('store_views')) {
            $cookies = explode(",", Cookie::get('store_views'));
            if (!in_array($post->id, $cookies)) {
                $post->increment('viewed');
                $cookies[] = $post->id;
                Cookie::queue('store_views', implode(",", $cookies), 60 * 24);
            }
        } else {
            $post->increment('viewed');
            Cookie::queue('store_views', $post->id, 60 * 24);
        }

        return view('front.blog.show', [
            'post' => $post,
            'similar' => $similar,
        ]);
    }

    function getVideo($video) {
        $video = Storage::disk("local")->get("public/blogs/videos/{$video}");
        $response = Response::make($video, 200);
        $response->header('Content-Type', 'video/mp4');
        return $response;
    }
}
