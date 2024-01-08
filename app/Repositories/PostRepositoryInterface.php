<?php

    namespace App\Repositories;
    use App\Models\Post;

    interface PostRepositoryInterface
    {
        public function all();

        public function findById($id);

        public function update($id);

        public function destroy($id);
    }

?>