<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user', 'editor')->first();
        $role_admin = Role::where('name', 'admin', 'editor')->first();
        $role_editor = Role::where('name', 'admin', 'editor')->first();
        $user = new User();
        $user->name = 'Sandra';
        $user->email = 'sandra@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = 'SandraEditor';
        $user->email = 'sandraEditor@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_editor);
     }
}
