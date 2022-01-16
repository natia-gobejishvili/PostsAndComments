@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>Manage Posts</h4>
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm mb-2" style="float: right">Create Post</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <th width="80px">Id</th>
                    <th width="150px">Title</th>
                    <th>Author</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View Post</a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Edit Post</a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection