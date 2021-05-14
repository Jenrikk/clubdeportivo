<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['key' => 'ADM', 'nombre' => 'Admin']);
        Role::create(['key' => 'STA', 'nombre' => 'Staff']);
        Role::create(['key' => 'ORO', 'nombre' => 'Cliente Oro']);
        Role::create(['key' => 'PLA', 'nombre' => 'Cliente Plata']);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'dni' => '76000111A',
            'telefono' => '999999999',
            'fnac' => '1990-01-01',
            'role_id' => 1
        ]);
    }
}
