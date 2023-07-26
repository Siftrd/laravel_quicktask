<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models as Database;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();


        $users = [
        	 ['rioxvee@gmail.com', '12345678','1','1','rioxvee','Bui','Minh'],
             ['veexrio@gmail.com', '12345678','0','1','veexrio','Hoang','Vy'],
        ];

        foreach ($users as $user) {
            Database\User::create([
                'email' => $user[0],
                'password' => $user[1],
                'is_admin' => $user[2],
                'is_active' => $user[3],
                'username'=>$user[4],
                'first_name'=>$user[5],
                'last_name'=>$user[6]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
