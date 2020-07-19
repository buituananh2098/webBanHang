<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name'       => 'Bàn Làm Việc',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/1.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Ghế Văn Phòng',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/2.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Kệ Sách Kệ Dép',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/3.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Bàn Ghế Ăn',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/4.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Tủ Chén Cao',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/5.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Nội Thất Cafe',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/6.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Giường Ngủ',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/7.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Tủ Quần Áo',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/8.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Tủ Ngăn Kéo',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/9.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Bàn Trang Điểm',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/10.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'NT Trẻ Em',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/11.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'NT Ngoài Trời',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/12.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Sofa',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/13.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Bàn Trà',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/14.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Tủ Kệ TV',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/15.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name'       => 'Tủ Trưng Bày',
                    'status'     => 1,
                    'highlight'  => 1,
                    'slug'       => '#',
                    'avatar'     => '/uploads/category/16.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
