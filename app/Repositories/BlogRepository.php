<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Models\BlogDetail;
use App\Models\BlogImage;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class BlogRepository
{

    public function getDataIndex()
    {
        try {
            $data1 = DB::table('blog as b')->join('blog_categories as bc', 'b.blog_cate_id', '=', 'bc.id')
                ->join('blog_images as bm', 'bm.blog_id', '=', 'b.id')
                ->whereNull('b.deleted_at')->get(array(
                    'b.id',
                    'b.title_blog',
                    'b.content_blog',
                    'b.author_blog',
                    'b.blog_cate_id',
                    'b.created_at',
                    'b.updated_at',
                    'bc.name',
                    'bc.slug',
                    'bc.status',
                    'bc.highlight',
                    'bc.parent_id',
                    'bm.path'
                ));
        } catch (Exception $e) {
            $data1 = null;
        }
//        $data = Blog::whereNull('deleted_at')->get();
        return $data1;
    }



    public function getDataByCategory($cate_id)
    {
        $data = null;
        try {
            $data = DB::table('blog as b')
                ->join('blog_categories as bc', 'b.blog_cate_id', '=', 'bc.id')
                ->join('blog_images as bm', 'bm.blog_id', '=', 'b.id')
                ->whereNull('b.deleted_at')
                ->where('b.blog_cate_id', '=', $cate_id)
                ->get(array('b.id', 'b.title_blog', 'b.author_blog', 'bc.slug', 'b.created_at', 'bm.path'));
        } catch (\Exception $e) {
            $data = null;
        }
        return $data;
    }

//    public function getDataByAuthor($keyWord)
//    {
//        $data = DB::table('blog as b')->join('blog_categories as bc', 'b.blog_cate_id', '=', 'bc.id')
//            ->join('blog_images as bm', 'bm.blog_id', '=', 'b.id')
//            ->whereNull('b.deleted_at')
//            ->where('b.author_blog', 'LIKE', '%' . $keyWord . '%')
//            ->get(array(
//                'b.id',
//                'b.title_blog',
//                'b.content_blog',
//                'b.author_blog',
//                'b.blog_cate_id',
//                'b.created_at',
//                'b.updated_at',
//                'bc.name',
//                'bc.slug',
//                'bc.status',
//                'bc.highlight',
//                'bc.parent_id',
//                'bm.path'
//            ));
//        return $data;
//    }

    public function getDataByName($keyWord)
    {
        $data = null;
        try {
            $data = DB::table('blog as b')->join('blog_categories as bc', 'b.blog_cate_id', '=', 'bc.id')
                ->join('blog_images as bm', 'bm.blog_id', '=', 'b.id')
                ->whereNull('b.deleted_at')
                ->where('b.title_blog', 'LIKE', '%' . $keyWord . '%')
                ->get(array(
                    'b.id',
                    'b.title_blog',
                    'b.content_blog',
                    'b.author_blog',
                    'b.blog_cate_id',
                    'b.created_at',
                    'b.updated_at',
                    'bc.name',
                    'bc.slug',
                    'bc.status',
                    'bc.highlight',
                    'bc.parent_id',
                    'bm.path'
                ));
        } catch (Exception $e) {
        }

        return $data;
    }

    public function getDataById($id)
    {
        $data = null;
        try {
            $data = DB::table('blog as b')->join('blog_categories as bc', 'b.blog_cate_id', '=', 'bc.id')
                ->join('blog_images as bm', 'bm.blog_id', '=', 'b.id')
                ->whereNull('b.deleted_at')
                ->where('b.id', '=', $id)
                ->get(array(
                    'b.id',
                    'b.title_blog',
                    'b.content_blog',
                    'b.author_blog',
                    'b.blog_cate_id',
                    'b.created_at',
                    'b.updated_at',
                    'bc.name',
                    'bc.slug',
                    'bc.status',
                    'bc.highlight',
                    'bc.parent_id',
                    'bm.path'
                ));

        } catch (Exception $e) {

        }

        return $data;
    }

    public function getDataCreate()
    {

    }

    public function updateOrCreate($data, $id = null)
    {
        if (isset($data['images'])) {
            $images['path'] = $data['images'];
            unset($data['images']);
        }
        try {
            $data = Blog::updateOrCreate(['id' => $id,], $data);
            $images['blog_id'] = $data->id;
            BlogImage::updateOrCreate(['blog_id' => $id,], $images);

        } catch (\Exception $e) {
            return false;
        }
        if ($data->id) {
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        $data1 = null;
        try {
            $data1 = DB::table('blog')->join('blog_images', 'blog_images.blog_id', '=', 'blog.id')
                ->whereNull('blog.deleted_at')
                ->where('blog.id', '=', $id)
                ->get(array(
                    'blog.id',
                    'blog.title_blog',
                    'blog.author_blog',
                    'blog.content_blog',
                    'blog.blog_cate_id',
                    'blog_images.path'
                ));
        } catch (Exception $e) {
        }

        return $data1;
    }

    public function destroy($id)
    {

        $delete = Blog::find($id);
        try {
            DB::table('blog_images')->where('blog_id', $id)->delete();
            DB::table('blog')->where('id', $id)->delete();
            return true;
        } catch (Exception $e) {
            return false;
        }
        return false;
    }

}
