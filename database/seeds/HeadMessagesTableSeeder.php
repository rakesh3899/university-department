<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('head_messages')->insert([
            'title'         => "Message from Head",
            'description'   => "This is Head's message demo content.",
            'image'         => ""
        ]);
    }
}
