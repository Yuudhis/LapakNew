<?php

namespace Database\Seeders;

use App\Models\UsersModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatausersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        UsersModel::truncate();
        Schema::enableForeignKeyConstraints();

        $datausers = [
            ['name' => 'yudhis', 'role' => 'admin', 'email' => 'yudhis@gmail.com', 'password' => '123123'],
            ['name' => 'dana', 'role' => 'users', 'email' => 'dana@gmail.com', 'password' => '456456'],
            ['name' => 'adenia', 'role' => 'users', 'email' => 'adenia@gmail.com', 'password' => '789789'],
            ['name' => 'zein', 'role' => 'users', 'email' => 'zein@gmail.com', 'password' => 'abcabc'],
            ['name' => 'rauf', 'role' => 'users', 'email' => 'rauf@gmail.com', 'password' => 'defdef'],
        ];

        foreach ($datausers as $value) {
            // UsersModel::insert([
            //     'name' => $value['name'],
            //     'email' => $value['email'],
            //     'password' => $value['password'],
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now(),

            UsersModel::insert([
                'name' => $value['name'],
                'role' => $value['role'],
                'email' => $value['email'],
                'password' => $value['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
