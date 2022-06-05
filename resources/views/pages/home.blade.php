@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Latest posts</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($posts as $post)
                                @php $author = $post->author @endphp

                                <div class="col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">
                                            {{ $post->created_at->format('d F Y H:i') }}<br>
                                            <span class="text-primary">{{ $author->name }}</span> | 
                                            <span class="text-success">{{ $author->email }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('posts.show', $post->slug) }}" class="font-weight-bold text-black title">
                                        <h3>{{ $post->title }}</h3>
                                    </a>
                                    <p class="text-muted">{{ $post->content }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection