@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">
                    <form method="POST" action="{{ route('admin.product.update', $products->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-2">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                        </div>

                        <div class="form-group mb-2">
                            <label for="profession">Name</label>
                            <input type="text" class="form-control" name="profession" value="{{ $products->profession }}">
                        </div>

                        {{-- <div class="form-group mb-2 col-4">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image[]" multiple>
                        </div> --}}

                        <div class="form-group mb-2 col-4">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image[]" multiple>

                            <!-- Display Existing Images -->
                            <div class="mt-3">
                                @if(!empty($products->image))
                                    @php
                                        $images = json_decode($products->image, true); // Assuming 'image' is stored as a JSON array
                                    @endphp
                                    @if(is_array($images) && count($images) > 0)
                                        <label>Current Images:</label>
                                        <div class="d-flex flex-wrap">
                                            @foreach($images as $image)
                                                <div class="me-2 mb-2">
                                                    <img src="{{ asset('images/' . $image) }}" alt="Product Image" style="width: 100px; height: auto;">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                @endif
                            </div>



                        <div class="form-group mb-2">
                            <label for="description"> Description</label>
                            <textarea class="form-control" name="description" rows="3">{{ $products->description }}</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $products->id }}" />
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
