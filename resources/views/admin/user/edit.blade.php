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
            <h3 class="box-title">Add Amin Users</h3>
          </div>
          <!-- /.box-header -->
          @include('includes.messages')
          <!-- form start -->
          <form role="form" action="{{ route('user.store') }}" method="post">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                
                <div class="form-group">
                  <label for="name">New Name</label>
                  <input value="{{$user->name}}" type="text" class="form-control" id="name" name="name" placeholder="New User Name">
                    
                  <label for="email">Email</label>
                  <input value="{{$user->email}}" type="text" class="form-control" id="slug" name="email" placeholder="User Email">

                  <label for="password">Password</label>
                  <input value="{{$user->password}}" type="text" class="form-control" id="slug" name="password" placeholder="User Password">

                  <label for="confirmpassword">Confirm Password</label>
                  <input value="{{$user->confirmpassword}}" type="text" class="form-control" id="slug" name="confirmpassword" placeholder="User Confirm Password">
                  
                  <label>Assign Role</label>
                  <div class="row">    
                    @foreach($roles as $role)
                      <div class="col-lg-4">
                        <div class="checkbox">
                          <label><input name="role[]" type="checkbox" value ="{{$role->id}}">{{$role->name}}</label>
                          </div>    
                      </div>
                    @endforeach  
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route( 'user.index' )}}" class="btn btn-warning">Back</a>
                
                </div>  
              </div>
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
