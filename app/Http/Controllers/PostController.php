<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('posts.index',[
            'posts' => $this->postRepository->all()
        ]);
    }

    public function show($id)
    {
        return view('posts.show',[
            'post' => $this->postRepository->findById($id)
        ]);
    }

    public function update($id)
    {
        $this->postRepository->update($id);
        return redirect('/post');
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);
        return redirect('/post');
    }
}
