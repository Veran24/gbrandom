<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GambarSeeder extends Seeder
{
    public function run()
    {
        $gambarPath = public_path('gambar');
        
        if (File::exists($gambarPath)) {
            $files = File::files($gambarPath);
            foreach ($files as $file) {
                if (in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    DB::table('gambars')->insert([
                        'filename' => $file->getFilename(),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
