@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">投稿を作成する</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group row mb-0">
                            <div class="col-md-12 p-3 w-100 d-flex">
                                <img src="{{ asset('storage/profile_image/' .$user->profile_image) }}" class="rounded-circle" width="50" height="50">
                                <div class="ml-2 d-flex flex-column">
                                    <p class="mb-0">{{ $user->name }}</p>
                                    <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->screen_name }}</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p class="text-weight text-primary">タイトル</p>
                                <textarea class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" rows="1">{{ old('title') }}</textarea>
                                <p class="text-weight text-primary">活動内容</p>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" rows="4">{{ old('content') }}</textarea>
                                <p class="text-weight text-primary">活動費</p>
                                <textarea class="form-control @error('cost') is-invalid @enderror" name="cost" required autocomplete="cost" rows="1">{{ old('cost') }}</textarea>
                                <p class="text-weight text-primary">活動時間</p>
                                <textarea class="form-control @error('time') is-invalid @enderror" name="time" required autocomplete="time" rows="1">{{ old('time') }}</textarea>
                                <p class="text-weight text-primary">活動場所</p>
                                <textarea class="form-control @error('place') is-invalid @enderror" name="place" required autocomplete="place" rows="1">{{ old('place') }}</textarea>

                                @error('text')
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
