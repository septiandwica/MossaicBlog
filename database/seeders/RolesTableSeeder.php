<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Admin'],
            ['name' => 'Author'],
        ]);
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'name' => 'Tian Code',
                'username' => 'tiancode',
                'email' => 'mail@tiancode.my.id',
                'password' => bcrypt('12341234'),
            ],
            [
                'role_id' => 1,
                'name' => 'Meily Deswita',
                'username' => 'meily.deswita',
                'email' => 'meilydeswita@tiancode.my.id',
                'password' => bcrypt('12341234'),
            ],
            [
                'role_id' => 1,
                'name' => 'Samuel Sasaki',
                'username' => 'samuel.sasaki',
                'email' => 'samuel.sasaki@tiancode.my.id',
                'password' => bcrypt('12341234')
            ],
            [
                'role_id' => 1,
                'name' => 'Rachel Simbolon',
                'username' => 'rachel.simbolon',
                'email' => 'rachelsimbolon@tiancode.my.id',
                'password' => bcrypt('12341234')
            ]
        ]);
    }
}
