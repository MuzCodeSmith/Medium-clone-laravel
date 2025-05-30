<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class clapController extends Controller
{
    public function clap(Post $post)
    {
        $isHasClapped = auth()->user()->hasClapped($post);
        if ($isHasClapped) {
            $post->claps()->where('user_id', auth()->id())->delete();
        } else {
            $post->claps()->create([
                'user_id' => auth()->id(),
            ]);
        }

        return response()->json([
            'clapsCount' => $post->claps()->count(),
        ]);
    }
}
