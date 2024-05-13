<?php

namespace Database\Seeders;

use App\Models\MemberModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('member')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $member = [
            [
                'name' => 'sandi',
                'address' => 'jl',
                'image' => 'avatar-1.jpg',
                'join' => date('Y-m-d'),
                'status' => 'Member',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'name' => 'rudi',
                'address' => 'jl',
                'image' => 'avatar-2.jpg',
                'join' => date('Y-m-d'),
                'status' => 'Admin',
                'aktif' => 1,
                'user_create' => 1,
            ],
        ];

        foreach ($member as $key => $value) {
            MemberModel::create($value);
        }
    }
}
