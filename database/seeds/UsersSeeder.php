<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();
		// Membuat role member
		$kasubagRole = new Role();
		$kasubagRole->name = "kasubag";
		$kasubagRole->display_name = "Kasubag";
		$kasubagRole->save();

		$kabagRole = new Role();
		$kabagRole->name = "kabag";
		$kabagRole->display_name = "Kabag";
		$kabagRole->save();

		$direkturRole = new Role();
		$direkturRole->name = "Direktur";
		$direkturRole->display_name = "Direktur";
		$direkturRole->save();
		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin Larapus';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->save();
		$admin->attachRole($adminRole);
		// Membuat sample member
		$member = new User();
		$member->name = "Sample Member";
		$member->email = 'kasubag@gmail.com';
		$member->password = bcrypt('rahasia');
		$member->save();
		$member->attachRole($kasubagRole);

		$member = new User();
		$member->name = "Sample Member";
		$member->email = 'kabag@gmail.com';
		$member->password = bcrypt('rahasia');
		$member->save();
		$member->attachRole($kabagRole);

		$member = new User();
		$member->name = "Sample Member";
		$member->email = 'direktur@gmail.com';
		$member->password = bcrypt('rahasia');
		$member->save();
		$member->attachRole($direkturRole);
    }
}
