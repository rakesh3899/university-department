<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'   => 1,
            'fname'     => 'MR.',
            'lname'    => 'Admin',
            'email'     => "admin@example.com",
            'password'  => bcrypt("rootadmin"),
            'mobile'    => 01300000000
        ]);
    }
}
