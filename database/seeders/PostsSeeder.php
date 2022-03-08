<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
            'title' => 'Sample Post',
            'description' => 'This is a sample description.',
            'photo' => 'Test Photo',
            'user_id' => 1,
        ]);
    }
}
