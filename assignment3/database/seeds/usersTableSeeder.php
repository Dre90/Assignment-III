<?php

class userTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $users = array(
            ['firstname' => 'Ola', 'lastname' => 'Norman', 'address' => 'Skolegata', 'postnr' => 2819, 'phonenumber' => 12345678, 'mail' => 'test@test.no', 'password' => Hash::make('password'), 'userImage' => 'test.jpg'],
            ['firstname' => 'Kari', 'lastname' => 'Norman', 'address' => 'Parkveien', 'postnr' => 7810, 'phonenumber' => 87654321, 'mail' => 'test2@test.no', 'password' => Hash::make('password'), 'userImage' => 'test.jpg']
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}
