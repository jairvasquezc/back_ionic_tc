<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DocumentoSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VehiculosTableSeeder::class);
        $this->call(ViajesTableSeeder::class);
        $this->call(VentasPasajesTableSeeder::class);
        $this->call(PaquetesEncomiendasTableSeeder::class);
        
    }
}
