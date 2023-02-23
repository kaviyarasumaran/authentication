<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function courseShow()
    {
        $video = Video::all();

        return view('video/coursePage',['video'=>$video]);
    }

    public function videoShow($id)
    {
        $video = Video::find($id);

        return view('video/videoPage',['video'=>$video]);
    }

    public function likeOrDislike()
    {
        
        return '1';

    }
}
