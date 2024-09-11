<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserAndRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear roles 'admin' y 'user'
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Crear usuario administrador
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('changeme'),
        ]);

        // Asignar rol 'admin' al usuario creado
        $adminUser->assignRole($adminRole);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar el usuario admin
        User::where('email', 'admin@example.com')->delete();

        // Eliminar roles
        Role::where('name', 'admin')->delete();
        Role::where('name', 'user')->delete();
    }
}
