<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Archive;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archives = [
            [
                'archive_code' => 'ARCH001',
                'title' => 'Arsip Instansi Vertikal',
                'description' => 'Balai Arsip Statis dan Tsunami (BAST) sebagai Unit Pelaksana Teknis (UPT) Arsip Nasional Republik Indonesia melaksanakan akuisisi arsip statis lembaga negara tingkat pusat di daerah Pemerintahan Aceh. Arsip yg diakuisisi merupakan arsip yang dihasilkan oleh lembaga negara tingkat pusat di daerah karena memiliki nilai guna kesejarahan, telah habis retensinya, dan berketerangan dipermanenkan yang telah diverifikasi baik secara langsung maupun tidak langsung oleh Balai Arsip Statis dan Tsunami.',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-01',
                'quantity' => 1,
                'image' => 'ArsipTsunami(3)1677467811.jpg',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => 'ARCH002',
                'title' => 'Arsip Tsunami / Indian Ocean Tsunami Archives',
                'description' => 'Arsip tsunami merupakan arsip kegiatan rehabilitasi dan rekonstruksi akibat bencana gempa bumi dan tsunami yang terjadi di wilayah Provinsi Aceh dan Kepulauan Nias Provinsi Sumatera Utara. Pada tahun 2017 arsip tsunami terutama arsip terkait rehabilitasi dan rekonstruksi ditetapkan sebagai Memory of the World (MoW) oleh Unesco',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-02',
                'quantity' => 1,
                'image' => 'ArsipTsunami1677467761.jpg',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => 'ARCH003',
                'title' => 'Arsip Perseorangan',
                'description' => 'Arsip Perseorangan merupakan arsip yang tercipta dari seseorang WNI yang berjuang melawan penjajahan di wilayah yang sekarang menjadi wilayah Negara Kesatuan Republik Indonesia yang gugur atau meninggal dunia demi membela bangsa dan negara, atau yang semasa hidupnya melakukan tindakan kepahlawanan atau menghasilkan prestasi dan karya yang luar biasa bagi pembangunan dan kemajuan bangsa dan negara Republik Indonesia atau daerahnya.',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-03',
                'quantity' => 1,
                'image' => 'ArsipTsunami(2)1677467824.jpg',
                'created_by' => 'Direktorat Pengolahan',
            ],
        ];

        foreach ($archives as $archive) {
            Archive::updateOrCreate(
                ['archive_code' => $archive['archive_code']],
                $archive
            );
        }
    }
}
