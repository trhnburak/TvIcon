<?php


namespace App\Http\Controllers\App\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index(){
        $blogs = new Blog();
        $blogs = $blogs->with('users')->get();
        return view('app.home.index')->with('blogs', $blogs);
    }
    
}