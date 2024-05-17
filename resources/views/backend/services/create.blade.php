@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-3">
                    <form method="GET" action="{{ route('services.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-1">
                            <label for="serviceName">Service Name</label>
                            <input type="text" class="form-control" id="serviceName" name="name" placeholder="Enter service name">
                        </div>
                        <div class="form-group mb-1">
                            <label for="serviceImage">Image</label>
                            <input type="file" class="form-control" id="serviceImage" name="img[]" multiple>
                        </div>
                        <div class="form-group mb-1">
                            <label for="serviceDescription">Description</label>
                            <textarea class="form-control" id="serviceDescription" name="desc" rows="3" placeholder="Enter service description"></textarea>
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
