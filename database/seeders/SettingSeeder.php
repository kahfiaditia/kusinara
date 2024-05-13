<?php

namespace Database\Seeders;

use App\Models\SettingModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('setting')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $services = [
            [
                'apps' => 'SEKOJOR',
                'kecamatan' => 'kec',
                'kota' => 'kota',
                'provinsi' => 'prov',
                'address' => 'Jl. ABC',
                'email' => 'email@gmail.com',
                'call' => '+6289621937505',
                'legalitas' => 'Sangar Sekojor telah mengantongi izin resmi berbadan hukum dari Akte Notaris INA ROSIANA, SH. S.K Menteri Kehakiman & HAM RI No. C-723 HT.03.02-Th.2002 Tgl 27 Maret 2002 NOTARIS PASAR MODAL NO: 726/PM/STTD-N/2004. LKB No Pend.032110209B16.',
                'youtube' => 'https://youtube.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'user_create' => 1,
            ],
        ];

        foreach ($services as $key => $value) {
            SettingModel::create($value);
        }
    }
}
