<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    private $roles = [
        ['admin', 'Administator'],
        ['manager', 'Manager'],
        ['user', 'User'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
            $roleModel = new Role();
            $roleModel->name = $role[0];
            $roleModel->description = $role[1];
            $roleModel->save();
        }
    }
}
