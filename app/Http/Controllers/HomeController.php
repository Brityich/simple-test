<?php

namespace App\Http\Controllers;

use App\Helpers\MyOptions;
use App\Model\Category;
use App\Model\Comment;
use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cache;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
use LaravelLocalization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD

    private $myoptions_data;
    
    public function __construct()
    {
        //$this->middleware('auth');

        if($lang = MyOptions::getOption('standart_language'))
        {
            LaravelLocalization::setLocale($lang);
        }
=======
    public function __construct()
    {
        //$this->middleware('auth');
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }

    /**
     * Set and return current locale
     *
     * @param  string $locale	        Locale to set the App to (optional)
     *
     * @return string 			Returns locale (if route has any) or null (if route does not have a locale)
     */
    public function index()
    {
<<<<<<< HEAD
        $num = MyOptions::getOption('number_posts');
        if($num)
        {
            $posts = Post::paginate($num);
        }
        else 
        {
            $posts = Post::paginate(5);
        }
=======
        $posts = Post::paginate(5);
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
        $categories = Category::all();
        return view('content.home', ['posts' => $posts, 'categories' => $categories]);
    }

    public function about()
    {
        $data = [];
        $data['about_image'] = asset(MyOptions::getOption('about_image'));
        $data['about_text'] = MyOptions::getOption('about_text');
        $data['about_title'] = MyOptions::getOption('about_title');
        //dd($data);
        return view('content.about', ['data' => $data]);
    }

    public function feedback()
    {
        return view('content.feedback');
    }

    public function changeLang($lang)
    {
        LaravelLocalization::setLocale($lang);
        return Redirect::to(LaravelLocalization::getLocalizedURL($lang, \URL::previous()));
    }

    public function getPost($post)
    {
        $p_data = Post::find($post);
        $comments = Comment::where('id_post', $post)->get();
        $categories = Category::all();
        return view('content.onepost', ['post' => $p_data, 'comments' => $comments, 'categories' => $categories]);
    }

    public function getCategory($category_id)
    {
        $category = Category::find($category_id);
        $posts = $category->posts()->paginate(5);
        $categories = Category::all();
        return view('content.category', ['category' => $category, 'posts' => $posts, 'categories' => $categories]);
    }
<<<<<<< HEAD

    public function saveComment(Request $request)
    {
        $data = $request->only([
            'comment-text',
            'id'
        ]);
        //dd($data);
        Comment::create(['id_author' => Auth::id(), 'id_post' => $data['id'], 'text' => $data['comment-text']]);
        return redirect()->back();
    }

    public function subscript()
    {
        
    }
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
