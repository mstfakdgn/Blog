@extends('admin.layouts.app')

@section('headSection')
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Posts</h3>
        <a class="col-lg-offset-5 btn btn-success" href="{{route('post.create')}}">Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Title</th>
            <th>Sub Title</th>
            <th>Slug</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <th>{{ $loop->index+1 }}</th>
            <th>{{ $post->title }}</th>
            <th>{{ $post->subtitle }}</th>
            <th>{{ $post->slug }}</th>
            <th>{{ $post->created_at }}</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
            @endforeach;
            <tr>
            </tbody>
          <tfoot>
            <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Sub Title</th>
              <th>Slug</th>
              <th>Created At</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
@endsection

@section('footerSection')
  <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
