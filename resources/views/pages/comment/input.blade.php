<form method="post" action="{{ route('comments.store') }}">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input type="hidden" name="is_guest" value="{{ Auth::check() ? 0 : 1 }}">
    <div class="form-group mb-2">
        <label>Name</label>
        <input type="text" class="form-control" name="name" {{ Auth::check() ? 'readonly' : '' }} 
            value="{{ Auth::check() ? Auth::user()->name : '' }}" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input type="text" class="form-control" name="email" {{ Auth::check() ? 'readonly' : '' }} 
            value="{{ Auth::check() ? Auth::user()->email : '' }}" required>
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