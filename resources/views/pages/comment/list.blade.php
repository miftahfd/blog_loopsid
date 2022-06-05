@php $comments = $post->comments @endphp

<i class="fa fa-comments"></i> ({{ count($comments) }}) Comments

<div class="row mt-2">
    @foreach ($comments as $comment)
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <div class="text-muted">
                    {{ $comment->created_at->format('d F Y') }}<br>
                    <span class="text-primary">{{ $comment->name }}</span> | 
                    <span class="text-success">{{ $comment->email }}</span>
                    <span class="badge bg-primary">{{ $comment->is_guest ? 'GUEST' : 'MEMBER' }}</span>
                </div>
            </div>
            <p class="text-muted">{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>