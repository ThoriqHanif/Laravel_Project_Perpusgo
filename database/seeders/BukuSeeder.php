<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul'=>'Selena',
            'slug'=>Str::slug('selena'),
            'cover'=>'selena.jpg',
            'penulis'=> 'Tere Liye',
            'penerbit_id'=> 1,
            'kategori_id'=> 2,
            'rak_id'=> 1,
            'stok' => 50,
        ]);

        Buku::create([
            'judul'=>'Komet',
            'slug'=>Str::slug('komet'),
            'cover'=>'komet.jpg',
            'penulis'=> 'Tere Liye',
            'penerbit_id'=> 1,
            'kategori_id'=> 2,
            'rak_id'=> 1,
            'stok' => 20,
        ]);
    }
}
