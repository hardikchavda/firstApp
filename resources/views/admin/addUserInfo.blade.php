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

            <form id="quickForm" action="{{ route('saveUserInfo') }}" method="post">
                @csrf
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @elseif (\Session::has('danger'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('danger') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="v_name" class="form-control" id="name"
                            placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea name="v_address" id="address" cols="30" rows="3" class="form-control" placeholder="Address">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="age">age</label>
                        <input type="number" name="v_age" class="form-control" id="age"
                            placeholder="Enter Your Age">
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        <!-- /.card -->
    </div>
    <div class="col-md-6">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
            @foreach ($data as $user)
                <tr>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->address }}</th>
                    <th>{{ $user->age }} </th>
                    <th><a href="{{ route('editUserInfo', ['id' => $user->id]) }}">Edit</a> </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
