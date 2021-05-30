<?php

use App\Clase;
use App\Espacio;
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
        Role::create(['key' => 'admin', 'nombre' => 'Admin']);
        Role::create(['key' => 'staff', 'nombre' => 'Monitor']);
        Role::create(['key' => 'gold', 'nombre' => 'Cliente Oro']);
        Role::create(['key' => 'silver', 'nombre' => 'Cliente Plata']);
        User::create([
            'name' => 'Pepito Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'dni' => '76000111A',
            'telefono' => '999999999',
            'fnac' => '1990-01-01',
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Jacinto Monitor',
            'email' => 'monitor@monitor.com',
            'password' => bcrypt('monitor'),
            'dni' => '76000111A',
            'telefono' => '999999999',
            'fnac' => '1990-01-01',
            'role_id' => 2
        ]);
        User::create([
            'name' => 'Juanito Cliente',
            'email' => 'cliente@cliente.com',
            'password' => bcrypt('cliente'),
            'dni' => '76000111A',
            'telefono' => '999999999',
            'fnac' => '1990-01-01',
            'role_id' => 3
        ]);
        Espacio::create([
            'nombre' => 'Sala multiusos',
            'descripcion' => 'espacio diafano con espejos y tarima',
            'imagen' => '/storage/imgSubidas/mkAp46qMk6rhmsaaRwvs7F9xwO7oEhw7c8NxSzHs.png',
        ]);
        Clase::create([
            'nombre' => 'Yoga',
            'descripcion' => 'Clase de yoga, relajacion',
            'imagen' => '/storage/imgSubidas/mkAp46qMk6rhmsaaRwvs7F9xwO7oEhw7c8NxSzHs.png',
            'aforo' => 5,
            'espacio_id' => 1
        ]);
    }
}
