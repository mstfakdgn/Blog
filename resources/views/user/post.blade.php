@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v3.3&appId=1109626279226933&autoLogAppEvents=1"></script>
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto">
        <small class="pull-left">Created at {{ $post->created_at->diffForHumans() }}</small>
          @foreach($post->categories as $category)
            <small class="pull-right" style="margin-left: 10px">
              {{$category->name}}
            </small>
          @endforeach
        {!! htmlspecialchars_decode($post->body) !!}
        <h3> Tags </h3>
        @foreach($post->tags as $tag)
          <small style="border-radius 5px;border: 1px solid gray; padding: 5px">
            {{$tag->name}}
          </small>
        @endforeach

      </div>
      <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
    </div>
  </div>
</article>

<hr>
@endsection
