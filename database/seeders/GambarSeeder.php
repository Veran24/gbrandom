<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GambarSeeder extends Seeder
{
    public function run()
    {
        $files = File::files(public_path('gambar'));
        foreach ($files as $file) {
            DB::table('gambars')->insert([
                'filename' => $file->getFilename(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
