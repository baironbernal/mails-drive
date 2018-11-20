<?php

use App\User;
use Illuminate\Database\Seeder;


class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name' => env('NAME'),
        	'email' => env('EMAIL'), 
        	'password' => bcrypt(env('PASSWORD'))
        ]);

        $admin->assignRole('admin');
    }
}
