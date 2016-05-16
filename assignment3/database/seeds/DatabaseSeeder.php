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
            ['firstname' => 'Ola', 'lastname' => 'Norman', 'address' => 'Skolegata', 'postnr' => 2819, 'phonenumber' => 12345678, 'mail' => 'test@test.no', 'password' => Hash::make('password'), 'userImage' => 'test.jpg'],
            ['firstname' => 'Kari', 'lastname' => 'Norman', 'address' => 'Parkveien', 'postnr' => 7810, 'phonenumber' => 87654321, 'mail' => 'test2@test.no', 'password' => Hash::make('password'), 'userImage' => 'test.jpg']
        );

        $category = array(
            ['catName' => 'Test category'],
            ['catName' => 'Test category2']
        );

        $items = array(
            ['title' => 'Lampe', 'category' => 1, 'description' => 'En veldig fin lampe', 'itemImage' => 'test.jpg', 'user' => 1, 'givenAway' => false],
            ['title' => 'Bord', 'category' => 2, 'description' => 'Et veldig fint bord', 'itemImage' => 'test.jpg', 'user' => 1, 'givenAway' => false]
        );

        DB::table('users')->delete();
        $this->command->info('Users table deleted!');

        DB::table('post')->delete();
        $this->command->info('Post table deleted!');

        DB::table('items')->delete();
        $this->command->info('Items table deleted!');

        DB::table('category')->delete();
        $this->command->info('Category table deleted!');


        DB::table('post')->insert($posts);
        $this->command->info('Post table seeded!');

        DB::table('users')->insert($users);
        $this->command->info('Users table seeded!');

        DB::table('category')->insert($category);
        $this->command->info('Category table seeded!');

        DB::table('items')->insert($items);
        $this->command->info('Items table seeded!');


    }
}
