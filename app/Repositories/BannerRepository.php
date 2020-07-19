<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class BannerRepository
{
    public function getBanner($limit = null)
    {
        $banner = DB::table('banner')->orderBy('sort', 'asc');
        if ($limit) {
            $banner->limit($limit);
        }
        return $banner->get();
    }

    public function create($data) {
        try {
            DB::table('banner')->insert($data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('banner')->where('id', $id)->delete();
            return true;
        } catch (Exception $e) {
            return false;
        }

    }
}
