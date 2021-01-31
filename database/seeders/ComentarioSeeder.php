<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comentario;
use App\Models\Post;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::all();
        $post->each(function($post) {
            Comentario::factory()->count(3)->create([
            'post_id' => $post->id
            ]);
        });
    }
}
