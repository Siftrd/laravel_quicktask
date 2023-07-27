<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->make();// dùng factory để tạo dummy records...

        // $this->call(UserSeeder::class); // dùng Seeder để thêm records...
        // \App\Models\User::factory(10)->create();

    
    } 
}
