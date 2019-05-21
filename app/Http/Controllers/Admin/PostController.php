<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Support\Facades\Config;

class PostController extends Controller
{
  private $defaultImage;

    public function __construct() {
      $this->defaultImage = Config::get('blog.default_image');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $tags = tag::all();
          $categories = category::all();
          return view('admin.post.post',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'body'=>'required',
      ]);

      if($request->hasFile('image')){
        //this public inside  storage-app 
        $imageName = $request->image->store('public');
      }else{
        $imageName = $this->defaultImage;
      }

      $post = new post;
      $post->image = $imageName;
      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->status=$request->status;
      $post->save();


      $post->tags()->sync($request->tags);
      $post->categories()->sync($request->categories);

      return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('tags','categories')->where('id',$id)->first();

        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit',compact('tags','categories','post'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'title'=>'required',
        'subtitle'=>'required',
        'slug'=>'required',
        'body'=>'required',
      ]);

      if($request->hasFile('image')){
        //this public inside  storage-app 
        $imageName = $request->image->store('public');
      }
      //all the posts have to have pictures
      /*else{
        $imageName = $this->defaultImage;
      }*/
      
      $post =post::find($id);
      $post->image = isset($imageName) ? $imageName: $post->image;
      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->status=$request->status;
      $post->save();

      $post->tags()->sync($request->tags);
      $post->categories()->sync($request->categories);

      return redirect(route('post.index'));
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
