@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-3">
                    <form method="POST" action="{{ route('admin.providers.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="name"> Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-1">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    
                </div>
            </div>
            <div class="col-3">
                <div class="float-end">
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
