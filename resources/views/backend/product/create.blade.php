@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-3">
                    <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter profession">
                        </div>
                        <div class="form-group mb-1">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image[]" multiple>
                        </div>
                        <div class="form-group mb-1">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="desc" rows="3" placeholder="Enter service description"></textarea>
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
