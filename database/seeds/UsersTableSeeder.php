<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZAaEBD58p1NPZ74xVPIobOD.I9L9wuqWjGTtFrJkrTGfI/HFX2hre',
                'remember_token' => 'xatmuiqg4qcYgDNVGvRFqMFlnfY560fwp7PrmPXE8KHb4A3XNATJr0R38oUv',
                'settings' => NULL,
                'created_at' => '2020-05-07 12:27:03',
                'updated_at' => '2020-05-07 12:27:03',
            ),
        ));
        
        
    }
}