@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive" style="max-height: 400px; overflow: auto;">
                    <table id="datatable" class="table table-hover" style="white-space: nowrap;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @php
                                        $images = json_decode($product->image);
                                    @endphp
                                    
                                    @if (is_array($images) || is_object($images))
                                        @foreach ($images as $image)
                                            <img src="{{ asset('public/images/' . trim($image)) }}" alt="Image" style="width: 10%">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.product.edit', $product->id) }}">Edit</a>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
