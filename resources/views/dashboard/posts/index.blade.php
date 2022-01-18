@extends('dashboard.layouts.main', [
    'title' => 'My Post'
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
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i data-feather="plus-square"></i> New Post</a>
    <div class="table-responsive">
        <table class="table table-bordered lg-4">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th scope="col">title</th>
                    <th scope="col">Category</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td class="text-center">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info " role="button">
                            <i data-feather="eye"></i>
                        </a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning " role="button"><i data-feather="edit"></i></a>
                        <button class="mr-2 btn btn-danger first warning confirm-delete"><i data-feather="trash-2"></i></button>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline form-delete">
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