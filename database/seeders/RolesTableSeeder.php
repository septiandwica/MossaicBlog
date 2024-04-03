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
                'name' => 'Tian Web Code',
                'username' => 'tianwebcode',
                'email' => 'admin@tianwebcode.my.id',
                'password' => bcrypt('12341234')
            ]
        ]);
    }
}
