@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', [$posts]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-0">
                            <div class="col-md-12 p-3 w-100 d-flex">
                                <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                <div class="ml-2 d-flex flex-column">
                                    <p class="mb-0">{{ $user->name }}</p>
                                    <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" rows="4">{{ old('title') ? : $posts->title }}</textarea>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" rows="4">{{ old('content') ? : $posts->content }}</textarea>
                                <textarea class="form-control @error('cost') is-invalid @enderror" name="cost" required autocomplete="cost" rows="4">{{ old('cost') ? : $posts->cost }}</textarea>
                                <textarea class="form-control @error('time') is-invalid @enderror" name="time" required autocomplete="time" rows="4">{{ old('time') ? : $posts->time }}</textarea>
                                <textarea class="form-control @error('place') is-invalid @enderror" name="place" required autocomplete="place" rows="4">{{ old('place') ? : $posts->place }}</textarea>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-right">

                                <button type="submit" class="btn btn-success">
                                    投稿する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
