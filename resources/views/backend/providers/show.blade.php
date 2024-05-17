@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover">
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
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>
                                    @if ($service->img)
                                        @php
                                            $images = json_decode($service->img);
                                        @endphp
                                        @foreach ($images as $image)
                                            <img src="{{ asset('images/' . $image) }}" alt="Image" style="max-width: 100px; max-height: 100px;">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $service->desc }}</td>
                                <td>
                                    <a class="btn btn-primary" href="services/edit/{{ $service->id }}">Edit</a>
                                    <form action="{{ route('backend.destroy', $service->id) }}" method="POST" style="display: inline;">
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
                    <div class="float-left">
                        {{-- <h5>Additional Information</h5>
                        <p>This section can contain any additional information you want to display.</p>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul> --}}
                    </div>
                    
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
