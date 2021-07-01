@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sizes</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Size Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Size</h3>
                  </div>
                <form role="form" action="{{route('sizes.update',$size->id)}}" method="post">
                  @csrf
                  @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="size">Size size</label>
                            <input type="text" class="form-control" id="size"
                             placeholder="Enter Size" name="size" value="{{ $size->size }}">
                            @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                              
                            @endif
                        </div>
    
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
              </div><!-- /.card -->
            </div>  <!-- /.col-md-10 -->
          </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  
@endsection