@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">
                    <form method="POST" action="{{ route('admin.providers.update', $service->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $service->name }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $service->first_name }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ $service->last_name }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">email</label>
                            <input type="text" class="form-control" name="email" value="{{ $service->email }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password" value="{{ $service->password }}">
                        </div>
                      
                        <input type="hidden" name="id" value="{{ $service->id }}" />
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
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
