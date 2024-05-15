@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Services Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $services->name }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputPassword1">Services image</label>
                            <input type="file" class="form-control" name="img[]" value="{{ $services->img }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputPassword1">Services Details</label>
                            <input type="text" class="form-control" name="desc" value="{{ $services->desc }}">
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
