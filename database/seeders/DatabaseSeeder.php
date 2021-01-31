<?php

namespace Database\Seeders;

// use App\Models\Comentario;
// use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\PostsSeeder;
use Database\Seeders\ComentarioSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(7)->create();
        $this->call(PostsSeeder::class);
        $this->call(ComentarioSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
