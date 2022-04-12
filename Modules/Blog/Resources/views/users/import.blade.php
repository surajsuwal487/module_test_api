@extends('blog::layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="wrapper">
  <div class="content-wrapper">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Import Excel</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ url('users/import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <label for="file">Your File Here</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>

            @error('image_path')
            <p class="text-danger">{{ $message }} </p>
            @enderror
          </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </form>
      @if (session('status'))
      <h6 class="alert alert-success">{{ session('status') }}</h6>
      @endif
    </div>
  </div>
</div>
<!-- /.content-wrapper -->

@endsection