<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert(
            [
                [
                    'path' => 'https://ibie.vn/images/promo/32/voucher50k.png',
                    'sort' => '1',
                ],
                [
                    'path' => 'https://ibie.vn/images/promo/32/3quatang-4.png',
                    'sort' => '2',
                ],
                [
                    'path' => 'https://ibie.vn/images/promo/32/muaban-tangghe-2.png',
                    'sort' => '3',
                ],
                [
                    'path' => 'https://ibie.vn/images/promo/31/main-slider-3.jpg',
                    'sort' => '3',
                ],
            ]
        );
    }
}
