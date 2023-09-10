<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kategori = ['komik','novel','teknologi','sejarah','sains'];

        foreach ($kategori as $data) {
            Kategori::create([
                'nama'=> $data,
                'slug'=> Str::slug($data)
            ]);
        }
        
    }
}
