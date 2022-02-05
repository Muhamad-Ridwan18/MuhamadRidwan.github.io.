@extends('dashboard.layouts.main', [
    'title' => 'My Category'
])

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-mb-lg-3 mt-3" role="alert">
            <div>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i data-feather="plus-square"></i> New Category</a>
    <div class="table-responsive">
        <table class="table table-bordered lg-4">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td class="text-center">
                        <a href="/dashboard/categories/{{ $category->id }}/edit" class="btn btn-warning " role="button"><i data-feather="edit"></i></a>
                        <button class="mr-2 btn btn-danger first warning confirm-delete"><i data-feather="trash-2"></i></button>
                        <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline form-delete">
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
<script>
</script>    
@endsection