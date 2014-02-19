<?php

class blogController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showAllPostsUsers(){
		$posts = Post::all();
		$list = Post::all()->take(5);
		return View::make('../blog/listAllArticles')->with('posts', $posts)->with('list', $list);
	}

	public function showOnePostsUsers($slug){
		$post = Post::where('slug', $slug)->first();
		$list = Post::all()->take(3);
		return View::make('blog.listOneArticle')->with('post', $post)->with('list', $list);
	}

	public function showAllPosts()
	{	
		$list = Post::paginate(5);
        return View::make('blog.listarticles')->with('posts',$list);
	}

	public function createPost(){

		if (Request::isMethod('post')){

            $rules = array(
                'title'       => 'required',
                'shortContent'   => 'required',
                'image' => 'required|image|max:3000',
            );
            $validator = Validator::make(Input::all(), $rules);

            // process the login
            if ($validator->fails()) {
                Session::flash('message', array(
                    'message'=>'No se ha podido crear el proyecto',
                    'option' =>'warning'
                ));
                return Redirect::back()->withInput()->withErrors($validator);
            }
			$title = Input::get('title');
			$shortContent = Input::get('shortContent');
			$slug = Str::slug($title);
			$content = Input::get('content');
			$user = Auth::user();

			$post = new Post;
			$post->title = $title;
			$post->shortContent = $shortContent;
			$post->user_id = $user->id;
			$post->slug = $slug;
			$post->content = $content;
			$post->save();


            $file = Input::file('image');
            $photo = new Photo;
            $photo->model = 'posts';
            $photo->object_id = $post->id;
            $photo->save();
            $photo->upload_image($file);

			return Redirect::route('admin_posts');
		}else{
			return View::make('../blog.createarticle');		
		}
	}

	public function updatePost($id){

		$post = Post::find($id);

		if (Request::isMethod('post')){
			$title = Input::get('title');
			$slug = Str::slug($title);
			$content = Input::get('content');
			$user = Auth::user();

			$post->title = $title;
			$post->user_id = $user->id;
			$post->slug = $slug;
			$post->content = $content;
			$post->save();
			return Redirect::route('admin_posts');
		}else{
			return View::make('../blog.post_update')
            	->with('post', $post);
		}
    }

    public function getDeletePost($id){

        $post = Post::find($id);
        $post->delete();
        return Redirect::route('admin_posts');
    }
}