<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
            ->orderByDesc('id')
            ->paginate(3);
        return view('main.post.index',compact('posts'));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('main.post.create');
    }
    /**
     * @param PostStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('photo')) {
                $data['photo'] = Storage::putFile('public/photo', $request->file('photo'));
            }
             Post::create($data);
             return redirect()->route('posts.index')->with('success', 'Post yaratildi!');;
        }
        catch (\Exception $exception)
        {
             return redirect()->back()->with('error', 'Post yaratishda xatolik yuz berdi!');
        }

    }
    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view('main.post.show',compact('post'));
    }
    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Post $post)
    {
        return view('main.post.edit',compact('post'));
    }
    /**
     * @param Request $request
     * @param string $id
     * @return void
     */
     function update(PostUpdateRequest $request, Post $post)
    {
        try {
            $data = $request->validated();
             if ($request->hasFile('photo')) {
                    if ($post->photo && Storage::exists($post->photo))
                    {
                        Storage::delete($post->photo);
                    }
                $data['photo'] = Storage::putFile('public/photo', $request->file('photo'));
            }
              $post->update($data);
             return redirect()->route('posts.index')->with('success', 'Post yangilandi !');;
        }
       catch ( Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Post yangilashda xatolik yuz berdi!');
        }
    }
    /**
     * @param string $id
     * @return void
     */
    public function destroy( Post $post)
    {
            if ($post->photo && Storage::exists($post->photo)) {
                        Storage::delete($post->photo);
            }
            $post->delete();
              return redirect()
            ->route('posts.index')
            ->with('success', 'Post o‘chirildi!');
    }
}
