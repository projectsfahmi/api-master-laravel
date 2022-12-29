<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function getRecord()
    {
        $blogModel = new Post;
        $find = $blogModel->find(1);
        return $find;
    }
}
