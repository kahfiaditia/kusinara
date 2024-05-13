<?php

namespace Database\Seeders;

use App\Models\GaleryModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('galery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $galery = [
            [
                'image' => 'galery-1.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'galery-2.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'galery-3.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'galery-4.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'galery-5.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'galery-6.jpg',
                'aktif' => 1,
                'user_create' => 1,
            ],
        ];

        foreach ($galery as $key => $value) {
            GaleryModel::create($value);
        }
    }
}
