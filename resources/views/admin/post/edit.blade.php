@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Titles</h3>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('post.update',$post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
                </div>

                  <div class="form-group">
                    <label for="subtitle">Post Sub Title</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title" value="{{$post->subtitle}}">
                  </div>

                    <div class="form-group">
                      <label for="slug">Post Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{$post->slug}}">
                      </div>
              </div>

              <div class="form-group">
                <label for="image">File input</label>
                <input name="image" type="file" id="image">


              </div>
              <br>
              <div  class="checkbox">
                <label>
                  <input type="checkbox" name="status" @if ($post->status == 1 ) checked @endif > Publish
                </label>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Write post body here
                  <small>Simple and fast</small>
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <div>
                  <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{ $post->body }}
                  </textarea>
                </div>
              </div>
            </div>
          </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href='{{route( 'post.index' )}}' class="btn btn-warning">Back</a>
            </div>
          </form>
        </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
