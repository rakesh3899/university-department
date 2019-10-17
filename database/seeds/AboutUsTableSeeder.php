<?php

use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'title'         => "About Us",
            'description'   => "This is About Us demo content.",
            'image'         => ""
        ]);
    }
}
