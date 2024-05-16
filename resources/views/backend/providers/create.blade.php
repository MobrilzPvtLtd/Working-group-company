@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-3">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter  name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-1">
                            <label for="password"> Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password">
                        </div>
                        {{-- <div class="form-group mb-1">
                            <label for="confirm_password">Name</label>
                            <input type="text" class="form-control" id="serviceName" name="name" placeholder="Enter service name">
                        </div> --}}
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
                    <!-- Add any additional content here if needed -->
                </div>
            </div>
            <div class="col-3">
                <div class="float-end">
                    <!-- Add any additional content here if needed -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
