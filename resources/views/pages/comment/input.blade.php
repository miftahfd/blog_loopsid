<form method="post" action="{{ route('comments.store') }}">
    @php $user = Auth::user() @endphp
    @if(Auth::check())
        @php 
            $isGuest = 0;
            $readonly = 'readonly';
            $name = $user->name;
            $email = $user->email;
        @endphp
    @else
        @php 
            $isGuest = 1;
            $readonly = '';
            $name = '';
            $email = '';
        @endphp
    @endif

    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input type="hidden" name="is_guest" value="{{ $isGuest }}">
    <div class="form-group mb-2">
        <label>Name</label>
        <input type="text" class="form-control" name="name" {{ $readonly }} value="{{ $name }}" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input type="text" class="form-control" name="email" {{ $readonly }} value="{{ $email }}" required>
    </div>
    <div class="form-group mb-2">
        <label>Website</label>
        <input type="text" class="form-control" name="website">
    </div>
    <div class="form-group mb-2">
        <label>Comment</label>
        <textarea class="form-control" name="comment" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>