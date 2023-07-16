<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //
    public function id(int $id){
        return Post::onlyTrashed()->findOrFail($id);
    }

}
