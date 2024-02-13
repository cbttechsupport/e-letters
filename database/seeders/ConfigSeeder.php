<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Config::insert([
            [
                'code' => 'default_password',
                'value' => 'admin',
            ],
            [
                'code' => 'page_size',
                'value' => '5',
            ],
            [
                'code' => 'app_name',
                'value' => 'Aplikasi Surat Menyurat',
            ],
            [
                'code' => 'institution_name',
                'value' => 'PT.Cipta Bayu Teknotama',
            ],
            [
                'code' => 'institution_address',
                'value' => 'Panglima Polim St No.53, Melawai, Kebayoran Baru, South Jakarta City, Jakarta 12160',
            ],
            [
                'code' => 'institution_phone',
                'value' => '(021) 27091395',
            ],
            [
                'code' => 'institution_email',
                'value' => 'business@ciptabayuteknotama.co.id',
            ],
            [
                'code' => 'language',
                'value' => 'id',
            ],
            [
                'code' => 'pic',
                'value' => 'Rehan',
            ],
        ]);
    }
}
