<?php

use App\File;
use Illuminate\Database\Seeder;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,100) as $index)
        {
            File::create([
                'thurm_url' => $index.".jpg",
                'full_url' => $index.".jpg",

            ]);
        }
    }
}
