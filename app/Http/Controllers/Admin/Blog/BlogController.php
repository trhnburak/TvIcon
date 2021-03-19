<?php


namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ()
    {
        $blogs = new Blog();
        $blogs = $blogs->where('user_id', Auth::id())->get();
        return view('admin.blog.index')->with('blogs', $blogs);
    }
    
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create ()
    {
        return view('admin.blog.create');
    }
    
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store (Request $request)
    {
        $blog = new Blog();
        
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->user_id = Auth::id();
        $blog->save();
        
        return redirect()->route('blog');
    }
    
    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit ($id)
    {
        $blogs = new Blog();
        $blogs = $blogs->where('id', $id)->first();
        return view('admin.blog.edit')->with('blog', $blogs);
    }
    
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update (Request $request)
    {
        $blog = new Blog();
        
        $data = [
            'title' => $request->title,
            'body' => $request->body
        ];
        
        $blog->where('id', $request->id)->update($data);
        
        return redirect()->route('blog');
    }
    
    public function delete ($id)
    {
        $blogs = new Blog();
        $blogs->where('id', $id)->delete();
        return redirect()->back();
    }
}