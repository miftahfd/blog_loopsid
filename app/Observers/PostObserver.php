<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->slug = $this->generateUniqueSlug($post);
    }

    public function deleting(Post $post)
    {
        $post->comments()->delete();
    }

    private function generateUniqueSlug($post)
    {
        $slug = Str::slug($post->title, '-');
        $count = $post::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
