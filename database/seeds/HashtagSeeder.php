<?php

use Illuminate\Database\Seeder;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Hashtag::class, 20)->create();
    }
}
