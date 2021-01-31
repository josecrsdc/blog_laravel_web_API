<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->login = 'admin';
        $usuario->email = 'admin@admin.com';
        $usuario->password = bcrypt('admin');
        $usuario->rol = 'admin';
        $usuario->save();
    }
}
