<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'=>"rizky",
            'email'=>"rizky@gmail.com",
            'telp'=>"0895331299363",
            'address'=>"cipoho",
            'sim'=>"8797979879",
            'password'=>bcrypt("123"),
            'role'=>"admin",
        ]);
        \App\Models\User::create([
            'name'=>"rizky2",
            'email'=>"rizky2@gmail.com",
            'telp'=>"0895331299363",
            'address'=>"cipoho",
            'sim'=>"8797979879",
            'password'=>bcrypt("123"),
            'role'=>"user",
        ]);
        \App\Models\Mobil::factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
