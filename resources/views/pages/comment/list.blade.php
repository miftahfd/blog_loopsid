<div class="row mt-2">
    @foreach ($comments as $comment)
        @php $post = $comment->post @endphp
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <div class="text-muted">
                    {{ $comment->created_at->format('d F Y H:i') }}<br>
                    @if($commentOfUser)
                        <span class="text-primary">Commented to 
                            <a href="{{ route('posts.show', $post->slug) }}" class="font-weight-bold text-black title">
                                {{ $post->title }}
                            </a>
                        </span>
                    @else
                        <span class="text-primary">{{ $comment->name }}</span> | 
                        <span class="text-success">{{ $comment->email }}</span>
                        <span class="badge bg-primary">{{ $comment->is_guest ? 'GUEST' : 'MEMBER' }}</span>
                    @endif
                </div>
            </div>
            <p class="text-muted">{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>