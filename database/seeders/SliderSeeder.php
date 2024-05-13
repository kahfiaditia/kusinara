<?php

namespace Database\Seeders;

use App\Models\SlidersModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sliders')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $team = [
            [
                'image' => 'slide-1.jpg',
                'title' => 'Sanggar Sekojor Lima Kurung',
                'deskripsi' => '"Dari Ciawi ke Caringin, pulangnya muter ke stasiun Prigi. Budaya Betawi kudu di kembangin, kalo bukan kita siapa lagi"',
                'link' => null,
                'aktif' => 1,
                'user_create' => 1,
            ],
        ];

        foreach ($team as $key => $value) {
            SlidersModel::create($value);
        }
    }
}
