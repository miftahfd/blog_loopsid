@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.flash_message')
                
                <div class="card">
                    <div class="card-header">Detail post</div>

                    <div class="card-body">
                        <div class="row">
                            @php $author = $post->author @endphp

                            <div class="col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="text-muted">
                                        {{ $post->created_at->format('d F Y') }}<br>
                                        <span class="text-primary">{{ $author->name }}</span> | 
                                        <span class="text-success">{{ $author->email }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('posts.show', $post->slug) }}" class="font-weight-bold text-black title">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <p class="text-muted">{{ $post->content }}</p>
                            </div>

                            <div class="col-md-6">
                                @include('pages.comment.input')
                            </div>

                            <div class="col-md-12 mt-2">
                                @php 
                                    $comments = $post->comments;
                                    $commentOfUser = false;
                                @endphp
                                @include('pages.comment.list', compact('comments', 'commentOfUser'))
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection