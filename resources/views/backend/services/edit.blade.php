@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">
                    <form method="post" action="{{ route('services.update', $services->id) }}" enctype="multipart/form-data">
                    @csrf
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $services->name }}">
                        </div>
                      
                        <div class="form-group mb-2 col-4">
                            <label for="city">Service Image</label>
                            <input type="file" class="form-control" name="img[]" multiple>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputPassword1">Service Description</label>
                            <textarea class="form-control" name="desc" rows="3">{{ $services->desc }}</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $services->id }}" />
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
