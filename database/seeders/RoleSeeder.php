<?php

namespace Database\Seeders;

use App\Dictionaries\RoleDictionary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => RoleDictionary::ADMINISTRATOR
        ]);

        Role::create([
            'name' => RoleDictionary::MEMBER
        ]);
    }
}
