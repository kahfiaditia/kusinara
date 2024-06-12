<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(GalerySeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AboutListSeeder::class);
        $this->call(SliderSeeder::class);
    }
}
