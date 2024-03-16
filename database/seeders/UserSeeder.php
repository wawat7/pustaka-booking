<?php

namespace Database\Seeders;

use App\Dictionaries\RoleDictionary;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => Hash::make('wawatganteng'),
            'address' => 'Jalan Admin',
            'image' => null,
            'is_active' => true
        ]);

        $admin->assignRole(RoleDictionary::ADMINISTRATOR);

        $member = User::create([
            'name' => 'Member',
            'email' => 'member@mail.com',
            'password' => Hash::make('wawatganteng'),
            'address' => 'Jalan Member',
            'image' => null,
            'is_active' => true
        ]);

        $member->assignRole(RoleDictionary::MEMBER);
    }
}
