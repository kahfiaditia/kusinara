<?php

namespace Database\Seeders;

use App\Models\ContactusModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('contact_us')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $contact = [
            [
                'email' => 'email@gmail.com',
                'name' => 'sandi',
                'subject' => 'sandi',
                'message' => 'test message',
            ],
        ];

        foreach ($contact as $key => $value) {
            ContactusModel::create($value);
        }
    }
}
