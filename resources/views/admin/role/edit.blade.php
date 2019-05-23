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
            <h3 class="box-title">Add Roles</h3>
          </div>
          <!-- /.box-header -->
          @include('includes.messages')
          <!-- form start -->
          <form role="form" action="{{ route('role.update') }}" method="post">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input value="{{ $role->name }}" type="text" class="form-control" id="name" name="name" placeholder="Role Name">
                    
                  <br>  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route( 'role.index' )}}" class="btn btn-warning">Back</a>
                
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
