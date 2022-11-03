@extends('admin.layouts.skel')
@section('title')
    Add User
@endsection
@section('main')
    <div class="col-md-6">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Users <small>Add User</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form id="quickForm" action="{{ route('updateUserInfo', ['id' => $data->id]) }}" method="post">
                @csrf
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>

                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="v_name" class="form-control" id="name"
                            placeholder="Enter Full Name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea name="v_address" id="address" cols="30" rows="3" class="form-control" placeholder="Address">{{ $data->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="age">age</label>
                        <input type="number" name="v_age" class="form-control" id="age"
                            placeholder="Enter Your Age" value="{{ $data->age }}">
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{ route('delUserInfo', ['id' => $data->id]) }}">Delete</a>
                </div>

            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
