<?php

use Illuminate\Database\Seeder;

class UserHasHashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\UserHasHashtag::class, 20)->create();
    }
}
