<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Julius Jr Kazibwe',
            'email'=>'kazibwejuliusjunior@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('selecta19702'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name'=>'System Admin',
            'email'=>'sysadmin@kiketropicalfruits.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('selecta19702'),
            'remember_token' => Str::random(10),
        ]);
    }
}
