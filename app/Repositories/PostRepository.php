<?php

    namespace App\Repositories;
    use App\Models\Post;

    class PostRepository implements PostRepositoryInterface
    {
        // Written in Eloquent
        public function all()
        {
            return Post::latest()->get()->map->format();
            // return Post::
            //         latest()
            //         ->get()
            //         ->map(function($post) {
            //             return $post->format();
            //         });
        }

        public function findById($id)
        {
            return Post::findOrFail($id)->format();
        }

        public function update($id)
        {
            Post::findOrFail($id)->update([
                'title' => request()->title,
            ]);
        }

        public function destroy($id)
        {
            Post::findOrFail($id)->delete();
        }
    }

?>