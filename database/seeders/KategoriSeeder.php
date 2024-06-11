<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('kategori')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $data = [
            [
                'nama' => 'PENDIDIKAN',
                'deskripsi' => 'PENDIDIKAN',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SOSIAL',
                'deskripsi' => 'SOSIAL',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'POLITIK',
                'deskripsi' => 'POLITIK',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'ARTIKEL',
                'deskripsi' => 'ARTIKEL',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BLOG',
                'deskripsi' => 'BLOG',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BERITA',
                'deskripsi' => 'BERITA',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'CERPEN',
                'deskripsi' => 'CERPEN',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'PUISI',
                'deskripsi' => 'PUISI',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'PANTUN',
                'deskripsi' => 'PANTUN',
                'aktif' => 1,
                'user_created' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($data as $key => $value) {
            KategoriModel::create($value);
        }
    }
}
