<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        Page::create([
            'slug' => 'test',
            'status' => 'published',
            'title' => 'The Name',
            'content' => 'text text text'
        ]);

    }
}
