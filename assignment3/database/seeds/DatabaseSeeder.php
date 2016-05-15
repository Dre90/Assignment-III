<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            ['postnr' => 2819, 'placeName' => 'Gjøvik'],
            ['postnr' => 7810, 'placeName' => 'Namsos']
        );

        $users = array(
            ['firstname' => 'Ola', 'lastname' => 'Norman', 'address' => 'Skolegata', 'postnr' => 2819, 'phonenumber' => 12345678, 'mail' => 'test@test.no', 'password' => 'password', 'userImage' => 'test.jpg'],
            ['firstname' => 'Kari', 'lastname' => 'Norman', 'address' => 'Parkveien', 'postnr' => 7810, 'phonenumber' => 87654321, 'mail' => 'test2@test.no', 'password' => 'password', 'userImage' => 'test.jpg']
        );

        DB::table('users')->delete();
        DB::table('post')->delete();


        DB::table('post')->insert($posts);
        DB::table('users')->insert($users);

    }
}
