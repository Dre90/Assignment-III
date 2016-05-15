<?php

use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('post')->delete();

        $post = array(
            ['postnr' => 2819, 'lastname' => 'Gjøvik'],
        );

        // Uncomment the below to run the seeder
        DB::table('post')->insert($post);
    }

}
