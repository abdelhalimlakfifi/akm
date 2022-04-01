<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $config = [
            'table' => 'users', 
            'length' => 10, 
            'prefix' => 'AKM-10-'
        ];
        $id = IdGenerator::generate($config);
        User::create([
            'id' => $id,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'image_path' => 'path',
            'is_admin' => true
        ]);
    }
}
