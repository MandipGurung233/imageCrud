<?php
namespace App\Services;

use App\Models\Post;

class DestroyItem{
    public function destroy(int $id){
        return Post::findOrFail($id);
    }
}