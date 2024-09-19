<?php

namespace Database\Seeders;

use App\Models\Renungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RenunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Renungan::factory(10)->create();

        Renungan::insert([
            [
                'title' => 'Kekuatan Doa',
                'bacaan' => 'Mazmur 1:1',
                'ayat_kunci' => 'Berbahagialah orang yang tidak berjalan menurut nasihat orang fasik, yang tidak berdiri di jalan orang berdosa, dan yang tidak duduk dalam kumpulan pencemooh,',
                'kalimat_prinsip' => 'Kekuatan doa adalah kekuatan utama kita dalam menghadapi tantangan.',
                'kalimat_renung' => 'Apakah kita pernah membahagiakan diri dengan doa?',
                'date_renungan' => '2024-09-01',
                'content_renungan' => 'Doa adalah kekuatan utama kita dalam menghadapi tantangan.',
                'doa' => 'Doa ini sangat bermanfaat untuk kita semua.',
            ],
            [
                'title' => 'Kasih Setia Tuhan',
                'bacaan' => 'Mazmur 1:2',
                'ayat_kunci' => 'tetapi yang kesukaannya ialah Taurat TUHAN, dan yang merenungkan Taurat itu siang dan malam.',
                'kalimat_prinsip' => 'Kasih Tuhan tidak pernah berubah, selalu setia.',
                'kalimat_renung' => 'Apakah kita pernah merenungkan Taurat TUHAN?',
                'date_renungan' => '2024-09-05',
                'content_renungan' => 'Kasih Tuhan tidak pernah berubah, selalu setia. Setiap harinya, kita harus berdoa dan beribadah, sehingga kita dapat mengenal Tuhan.',
                'doa' => 'Kasih Tuhan adalah Setia bagi kita semua.',
            ],
            [
                'title' => 'Pengharapan Baru',
                'bacaan' => 'Mazmur 1:3',
                'ayat_kunci' => 'Ia seperti pohon, yang ditanam di tepi aliran air, yang menghasilkan buahnya pada musimnya, dan yang tidak layu daunnya; apa saja yang diperbuatnya berhasil.',
                'kalimat_prinsip' => 'Setiap hari adalah kesempatan baru untuk pengharapan.',
                'kalimat_renung' => 'Apakah kita pernah merenungkan kesempatan baru untuk pengharapan?',
                'date_renungan' => '2024-09-10',
                'content_renungan' => 'Setiap hari adalah kesempatan baru untuk pengharapan. Bukakan diri dan berdoa, dan beribadah, dan berharaplah kita dapat mengenal Tuhan.',
                'doa' => 'Pengharapan sejati adalah pengharapan yang baru dari Allah.',
            ],
        ]);
    }
}
