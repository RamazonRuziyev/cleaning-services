<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['category','tags'])
            ->orderByDesc('id')
            ->paginate(3);
        return view('main.post.index',compact('posts'));
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
          $categories = Category::all();
          $tags = Tag::all();
        return view('main.post.create', compact('categories','tags'));
    }
    /**
     * @param PostStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        try {
            $data = $request->validated();
            $data['category_id'] = $request->category_id;
            $data['user_id'] = 1;
            if ($request->hasFile('photo')) {
                $data['photo'] = Storage::putFile('public/photo', $request->file('photo'));
            }
           $post = Post::create($data);
            if ($request->has('tag')) {
                $post->tags()->attach($request->tag);
             }
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('main.post.show',compact('post','categories','tags'));
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
