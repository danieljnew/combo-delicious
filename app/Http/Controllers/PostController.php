<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

/**
 *
 */
class PostController extends Controller
{
    public function getIndex(Store $session)
    {
      $post = new Post();
      $posts = $post->getPosts($session);
      return view('blog.index', ['posts' => $posts]);
    }
    public function getAdminIndex(Store $session)
    {
      $post = new Post();
      $posts = $post->getPosts($session);
      return view('admin.index', ['posts' => $posts]);
    }
    public function getPost(Store $session, $id)
    {
      $post = new Post();
      $posts = $post->getPosts($session, $id);
      return view('blog.post', ['posts' => $posts]);
    }
}
