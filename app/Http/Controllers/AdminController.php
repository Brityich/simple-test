<?php

namespace App\Http\Controllers;

use App\Helpers\MyOptions;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Model\Admins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\App;
use App\Model\Category;
use App\Model\Options;
use Intervention\Image\ImageManagerStatic as Image;


class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    /*login path*/
    public function login()
    {
        return view('admin.auth.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }

    //register path
    public function register()
    {
        return view('admin.auth.register');
    }

    public function actionRegister(Request $request)
    {
        $input = $request->only([
            'name',
            'email',
            'password',
            'password_confirmation'
        ]);
        $validate = \Validator::make($input, [
            'name' => 'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        if($validate->fails()){
            //return redirect()->back()->with('errors', $validate->messages())->withInput();
            return redirect()->back()->withErrors($validate)->withInput($request->input());
        }
        Admins::create(['name'=>$input['name'], 'email'=>$input['email'], 'password'=>Hash::make($input['password'])]);
        //Auth::attempt(['email' => $input['email'], 'password' => $input['password']]);
        return view('admin.auth.login');
    }

    public function actionLogin(Request $request)
    {
        $remember = $request->post('remember');
        $values = $request->only([
            'email',
            'password',
            'remember'
        ]);
        //dd($values);
        if (Auth::guard('admin')->attempt(['email' => $values['email'], 'password' => $values['password']], /*$values['remember']*/ $remember)) {
            // Authentication passed...
            return redirect()->route('admin');
        }
        else {
            $request->validate([
                'email' => 'required|exists:users,email',
                'password' => 'required|exists:users,password'
            ]);
        }
    }

    public function index()
    {
        $data['standart_language'] = MyOptions::getOption('standart_language');
        $data['about_title'] = MyOptions::getOption('about_title');
        $data['about_text'] = MyOptions::getOption('about_text');
        $data['about_image'] = MyOptions::getOption('about_image');
        $data['number_posts'] = MyOptions::getOption('number_posts');
        $data['number_words'] = MyOptions::getOption('number_words');
        return view('admin.main', ['data' => $data]);
    }

    public function posts()
    {
        $data['contact_name'] = MyOptions::getOption('contact_name');
        $data['contact_email'] = MyOptions::getOption('contact_email');
        $data['contact_phone'] = MyOptions::getOption('contact_phone');
        $data['contact_address'] = MyOptions::getOption('contact_address');
        return view('admin.footer', ['data' => $data]);
    }

    public function categories()
    {
        $data = Category::all();
        return view('admin.categories', ['data' => $data]);
    }

    public function news()
    {
        $data = Post::all();
        $creator = Admins::all();
        $category = Category::all();
        return view('admin.news', ['data' => $data, 'creator' => $creator, 'category' => $category]);
    }

    public function addcategory(Request $request)
    {
        $input = $request->only([
            'name'
        ]);
        $validate = \Validator::make($input, [
            'name' => 'required|string|max:255'
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput($request->input());
        }
        $category = new Category();
        $category->name = $input['name'];
        $category->save();

        return redirect()->back()->with('message', 'Category created');
    }

    public function addpost(Request $request)
    {
        $input = $request->only([
            'title',
            'description',
            'category'
        ]);
        $validate = \Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->input());
        }
        //dd(Category::where('name', $input['category'])->first()->name);
        $post = new Post();
        $post->id_author = Auth::guard('admin')->id();
        $post->id_category = Category::where('name', $input['category'])->first()->id;
        $post->title = $input['title'];
        $post->description = $input['description'];
        $post->save();

        return redirect()->back()->with('message', 'Category created');
    }

    public function saveSettings(Request $request)
    {
        $input = $request->only([
            'standart_language',
            'about_title',
            'about_text',
            'about_image',
            'number_posts',
            'number_words'
        ]);
        //dd($input);
        $name = null;
        if ($request->hasFile('about_image')) {
            $name = $request->file('about_image')->getClientOriginalExtension();
            $request->file('about_image')->move(public_path('img'), $name);
            Image::make(asset('img/' . $name))->resize(750, 300);
        }
        MyOptions::setOption('standart_language', $input['standart_language']);
        MyOptions::setOption('about_title', $input['about_title']);
        MyOptions::setOption('about_text', $input['about_text']);
        MyOptions::setOption('about_image', asset('img/' . $name));
        MyOptions::setOption('number_posts', $input['number_posts']);
        MyOptions::setOption('number_words', $input['number_words']);

        return redirect()->back();
    }

    public function saveFooterSettings(Request $request)
    {
        $input = $request->only([
            'contact_email',
            'contact_name',
            'contact_phone',
            'contact_address'
        ]);
        MyOptions::setOption('contact_email', $input['contact_email']);
        MyOptions::setOption('contact_name', $input['contact_name']);
        MyOptions::setOption('contact_phone', $input['contact_phone']);
        MyOptions::setOption('contact_address', $input['contact_address']);

        return redirect()->back();
    }

    public function editPost($post_id)
    {
        $post = Post::find($post_id);
        $category = Category::all();
        return view('admin.edit_post', ['post' => $post, 'category' => $category]);
    }

    public function editCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.edit_category', ['category' => $category]);
    }

    public function deletePost(Request $request)
    {
<<<<<<< HEAD
        $post = Post::find($request->id)->delete();
        return redirect()->back();
=======
        //dd($request->id);
        
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }

    public function deleteCategory(Request $request)
    {
<<<<<<< HEAD
        $category = Category::find($request->id)->delete();
        return redirect()->back();
=======
        //$id = $request->id;
        $categ = Category::find($request->id)->posts()->delete();
        $categ->delete();
        
        //dd($categ->posts);
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }

    public function sendEditPost(Request $request)
    {
<<<<<<< HEAD
        $data = $request->only([
            'id',
            'title',
            'description',
            'category'
        ]);
        Post::find($data['id'])->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'category' => $data['category']
        ]);
        return redirect()->back();
    }

    public function sendEditCategory(Request $request)
    {
        $data = $request->only([
            'id',
            'title'
        ]);
        Category::find($data['id'])->update([
            'name' => $data['title']
        ]);
        return redirect()->back();
=======
        
    }

    public function sendEditCategory()
    {

>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}