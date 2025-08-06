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
            [
                'archive_code' => '34005',
                'title' => 'Memorandum No.M-10331/BP-BRR.01.3/V/2008 tanggal 9 Mei 2008 dari Kepala Layanan SDM kepada Kepala Hubungan Lembaga/Juru Bicara tentang Pemberitahuan Berakhirnya masa kontrak kerja dengan Bapel BRR NAD-Nias',
                'description' => 'Memorandum No.M-10331/BP-BRR.01.3/V/2008 tanggal 9 Mei 2008 dari Kepala Layanan SDM kepada Kepala Hubungan Lembaga/Juru Bicara tentang Pemberitahuan Berakhirnya masa kontrak kerja dengan Bapel BRR NAD-Nias',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-04',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '33686',
                'title' => 'Memorandum No.M-0498/BP-BRR.01.03/III/2008 tanggal 3 Maret 2008 dari Pjs. Kepala Layanan SDM kepada Kepala Layanan Hukum tentang Usulan Perbaikan TMT atas nama Taqwallah di SK Kabapel No. 221/KEP/BP-BRR/XII/2007.',
                'description' => 'Memorandum No.M-0498/BP-BRR.01.03/III/2008 tanggal 3 Maret 2008 dari Pjs. Kepala Layanan SDM kepada Kepala Layanan Hukum tentang Usulan Perbaikan TMT atas nama Taqwallah di SK Kabapel No. 221/KEP/BP-BRR/XII/2007.',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-05',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '33687',
                'title' => 'Memorandum No.M-0508.A/BRR.01/IV/2008 tanggal 4 Maret 2008 dari Wakil Sekretaris Bapel BRR NAD-Nias kepada Kepala Layanan Organisasi BRR NAD-Nias',
                'description' => 'Memorandum No.M-0508.A/BRR.01/IV/2008 tanggal 4 Maret 2008 dari Wakil Sekretaris Bapel BRR NAD-Nias kepada Kepala Layanan Organisasi BRR NAD-Nias tentang Penyediaan Pesawar Charteran terkait dengan pelaksanaan Pelantikan Bupati /Wakil Deputi Aceh Selatan pada tanggal 10 Maret 2008',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-06',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '33688',
                'title' => 'Memorandum No.M-0520/BP-BRR.01.3/III/2008 tanggal 5 Maret 2008 dari Kepala Layanan SDM kepada Kepala Satker Sekretariat tentang Pelatihan Mengelola Hidup Merencanakan Masa Depan (Life Plan)',
                'description' => 'Memorandum No.M-0520/BP-BRR.01.3/III/2008 tanggal 5 Maret 2008 dari Kepala Layanan SDM kepada Kepala Satker Sekretariat tentang Pelatihan Mengelola Hidup Merencanakan Masa Depan (Life Plan)',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-07',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '1',
                'title' => 'Arsip Instansi Vertikal - 2019 Puslatbang KHAN LAN RI',
                'description' => 'Laporan Keuangan Tahunan Pusat Kajian dan Pendidikan dan Pelatihan Aparatur IV Lembaga Administrasi Negara',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-08',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '19',
                'title' => 'Arsip Instansi Vertikal - Kejaksaan Tinggi Aceh 2021',
                'description' => 'Laporan evaluasi kinerja Kejaksaan Tinggi Nanggroe Aceh Darusslam tahun 2010',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-09',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '25',
                'title' => 'Arsip Tsunami / Indian Ocean Tsunami Archives - Dewan Pengarah BRR NAD-NIAS',
                'description' => 'Salinan Keputusan Kepala Badan Pelaksana Badan Rehabilitasi dan Rekonstruksi Wilayah Kehidupan Masyarakat Provinsi Nanggroe Aceh Darussalam dan Kepulauan Nias Provinsi Sumatera Utara Nomor : 141/KEP/BP-BRR/VIII/2007 tanggal 6 Agustus 2007 tentang Pengangkatan Sdr. Arnada Saleh sebagai Pelaksana Tugas Kepala Kantor Perwakilan III Pada Badan Pelaksan BRR NAD Nias',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-10',
                'quantity' => 1,
                'image' => '34005.png',
                'created_by' => 'Direktorat Pengolahan',
            ],
            [
                'archive_code' => '5287',
                'title' => 'Arsip Tsunami / Indian Ocean Tsunami Archives - Sekertariat Badan Pelaksana BRR NAD-NIAS',
                'description' => 'Surat dari Posko Desa Lam Guron Kecamatan Peukan Bada Kabupaten Aceh Besar No. 223/Lamguron/AB/Oktober/2006 perihal Proposal Bantuan Daging Meugang kepada Manager BRR Cq. Bagian Komunikasi',
                'category' => 'Arsip Tekstual',
                'physical_location' => 'CF-11',
                'quantity' => 1,
                'image' => '34005.png',
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
