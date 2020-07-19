<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Bộ bàn ghế ăn 4 chỗ Ulsan',
                    'state' => 1,
                    'cost' => '3290000',
                    'reward_points' => '250',
                ],
                [
                    'name' => 'Bộ bàn ăn 6 ghế Columbia',
                    'state' => 1,
                    'cost' => '19990000',
                    'reward_points' => '320',
                ],
                [
                    'name' => 'Tủ đầu giường 2 ngăn kéo',
                    'state' => 1,
                    'cost' => '1850000',
                    'reward_points' => '25',
                ],
                [
                    'name' => 'Tủ 5 ngăn kéo Como',
                    'state' => 1,
                    'cost' => '9030000',
                    'reward_points' => '20',
                ],
                [
                    'name' => 'Ghế ăn Rec mặt gỗ phong cách Modern',
                    'state' => 1,
                    'cost' => '5030000',
                    'reward_points' => '30',
                ],
                [
                    'name' => 'Bàn ăn Rec 6 chỗ mặt gỗ phong cách Modern',
                    'state' => 1,
                    'cost' => '4500000',
                    'reward_points' => '20',
                ],
                [
                    'name' => 'Bộ bàn ăn Rec 4 chỗ phong cách Modern',
                    'state' => 1,
                    'cost' => '1300000',
                    'reward_points' => '230',
                ],
                [
                    'name' => 'Ghế Trưởng phòng IB1009 [Kho HCM]',
                    'state' => 1,
                    'cost' => '4500000',
                    'reward_points' => '20',
                ],
                [
                    'name' => 'Kệ sách 5 tầng HB540 gỗ cao su màu cánh gián [Kho HCM]',
                    'state' => 1,
                    'cost' => '7580000',
                    'reward_points' => '220',
                ],
                [
                    'name' => 'Kệ sách 3 tầng HB363 gỗ cao su màu cánh gián [Kho HCM]',
                    'state' => 1,
                    'cost' => '5550000',
                    'reward_points' => '230',
                ],
                [
                    'name' => 'Ghế Neva không tay mặt gỗ gỗ ash [KHO HCM]',
                    'state' => 1,
                    'cost' => '7080000',
                    'reward_points' => '30',
                ],
                [
                    'name' => 'Giường đôi Romsey gỗ sồi 2m [KHO HCM]',
                    'state' => 1,
                    'cost' => '2080000',
                    'reward_points' => '23',
                ],
                [
                    'name' => 'Bộ bàn xếp Leti Islands gỗ keo',
                    'state' => 1,
                    'cost' => '5080000',
                    'reward_points' => '20',
                ],
            ]
        );
        DB::table('images_product')->insert(
            [
                [
                    'product_id' => 1,
                    'path' => 'https://ibie.vn/images/thumbnails/465/465/detailed/32/1.jpg',
                ],
                [
                    'product_id' => 1,
                    'path' => 'https://ibie.vn/images/thumbnails/386/386/detailed/32/1_0k5x-7u.jpg',
                ],
                [
                    'product_id' => 2,
                    'path' => 'https://ibie.vn/images/thumbnails/386/386/detailed/32/2.jpg',
                ],
                [
                    'product_id' => 3,
                    'path' => 'https://ibie.vn/images/thumbnails/386/386/detailed/32/Giuong-doi-Lyon-go-oc-cho_1_tsws-sw.jpg',
                ],
                [
                    'product_id' => 4,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Ghe_Neva_khong_tay_mat_go_mau_tu_nhien_6.jpg',
                ],
                [
                    'product_id' => 5,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Ke-sach-3-tang-HB363C-1.jpg',
                ],
                [
                    'product_id' => 6,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/4_rhtn-mc.jpg',
                ],
                [
                    'product_id' => 7,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Leti-Islands-2.jpg',
                ],
                [
                    'product_id' => 8,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Robin-sofa-set-1.jpg',
                ],
                [
                    'product_id' => 9,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Bo-ghe-thu-gian-Queen-Bench.jpg',
                ],
                [
                    'product_id' => 10,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Ban-bar-Rinca.jpg',
                ],
                [
                    'product_id' => 11,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/ghe-an-rec-2.jpg',
                ],
                [
                    'product_id' => 12,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/ban-an-rec-2_bbvl-iq.jpg',
                ],
                [
                    'product_id' => 13,
                    'path' => 'https://ibie.vn/images/thumbnails/213/213/detailed/32/Ban-tra-Chiba-khong-phen-mau-tu-nhien-2.jpg',
                ],

            ]
        );
    }
}
