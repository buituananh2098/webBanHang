<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder{
    public function run()
    {
        DB::table('blog')->insert(
            [
                [
                    'id' => 1,
                    'title_blog' => 'Blog của Tuấn Anh Đẹp Trai',
                    'author_blog' => 'Anh Bùi',
                    'content_blog' => '<h1>Blog siêu to khổng lồ</h1>',
                    'blog_cate_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'title_blog' => 'Blog này tên là số 1 ',
                    'author_blog' => 'Cô Đơn',
                    'content_blog' => '<h1>Blog siêu to khổng lồ</h1>',
                    'blog_cate_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'title_blog' => 'Cafe thuốc lá và những ngày vui',
                    'author_blog' => 'Yêu em',
                    'content_blog' => '<h1>Blog siêu to khổng lồ</h1>',
                    'blog_cate_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'title_blog' => 'Thả vào những lúc tay em lẻ loi',
                    'author_blog' => 'Yêu em',
                    'content_blog' => '<h1>Blog siêu to khổng lồ</h1>',
                    'blog_cate_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );


        DB::table('blog_categories')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Blog của Tuấn Anh Đẹp Trai',
                    'slug' => 'Blog của Tuấn Anh Đẹp Trai',
                    'status' => '1',
                    'highlight' => '1',
                    'parent_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'name' => 'Em, dạo này em có thấy lẻ loi',
                    'slug' => 'Em, dạo này em có thấy lẻ loi',
                    'status' => '1',
                    'highlight' => '1',
                    'parent_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'name' => 'Lòng có mang chút đắng buồn vương',
                    'slug' => 'Lòng có mang chút đắng buồn vương',
                    'status' => '1',
                    'highlight' => '1',
                    'parent_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'name' => 'Như anh giờ này, 1 mình bên ly cafe đá ,,,',
                    'slug' => 'Như anh giờ này, 1 mình bên ly cafe đá ,,,',
                    'status' => '1',
                    'highlight' => '1',
                    'parent_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );

        DB::table('blog_images')->insert(
            [
                [
                    'id' => 1,
                    'blog_id' => 1,
                    'path' => 'https://kenh14cdn.com/thumb_w/660/2020/3/24/iu-purple-hair-3-15850210668241373299793.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'blog_id' => 2,
                    'path' => 'https://billboardvn.vn/wp-content/uploads/2020/02/iu.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'blog_id' => 3,
                    'path' => 'https://billboardvn.vn/wp-content/uploads/2019/11/iutn-1.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'blog_id' => 4,
                    'path' => 'https://amp.ex-cdn.com/EXP/media.phunutoday.vn/resize/560x315/files/news/2019/11/20/iu-nhuom-toc-1-tuan-1-lan-nhan-sac-thay-doi-chong-mat-072002.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );

    }
}
