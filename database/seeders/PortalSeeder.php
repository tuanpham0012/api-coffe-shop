<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portals')->insert([
            [
                'name' => 'Cyber Coffe A1',
                'code' => 'CS00012',
                'tax_code' => '22122212',
                'city_id' => 1,
                'district_id' => 14,
                'ward_id' => 262,
                'address' => 'số 74, Hồ Đền Lừ',
                'phone_number' => '0345678678',
                'website' => 'fb.com',
                'start_date' => '2000-09-09',
            ]
            ]);
    }
}
