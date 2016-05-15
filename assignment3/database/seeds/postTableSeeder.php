<?php

class postTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('post')->delete();


        $posts = array(
            ['postnr' => 2819, 'placeName' => 'Gjøvik'],
            ['postnr' => 7810, 'placeName' => 'Namsos']
        );

        // Uncomment the below to run the seeder
        DB::table('post')->insert($posts);
    }

}
