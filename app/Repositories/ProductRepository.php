<?php

namespace App\Repositories;

use App\Models\Detail;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository
{
    /**
     * @return Product
     */
    public function getDataIndex()
    {
        return Product::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();
    }

//    public  function  getDataPaging()
//    {
//        return Product::whereNull('deleted_at')->orderBy('created_at', 'desc')->paginate(12);
//    }

    public  function  getDataPaging()
    {
        return DB::table('products as p')->join('images_product as ip', 'p.id', '=', 'ip.product_id')
            ->whereNull('p.deleted_at')->paginate(12,array(
                'p.id',
                'p.name',
                'p.code',
                'p.reward_points',
                'p.cost',
                'p.quantity',
                'p.description',
                'p.state',
                'ip.path'
            ));
    }

    public function getDataByName($param)
    {
        return Product::whereNull('deleted_at')->where('name', 'LIKE', '%' . $param . '%')->get();
    }

    public function getDataById($id)
    {
        return Product::whereNull('deleted_at')->find($id);
    }

    public function getDataCreate()
    {

    }

    public function updateOrCreate($data, $product_detail, $relax = null, $id = null)
    {
        if (isset($data['images'])) {
            $images['path'] = $data['images'];
            unset($data['images']);
        }
        try {
            $data = Product::updateOrCreate(['id' => $id,], $data);
            $product_detail['product_id'] = $data->id;
            $images['product_id'] = $data->id;
            ImageProduct::updateOrCreate(['product_id' => $id,], $images);
            // foreach ($product_detail as $value) {
            Detail::updateOrCreate(['product_id' => $id,], $product_detail);
            // }
            foreach ($relax as $value) {
                $data->category()->sync($value);
            }
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
        return Product::find($id);
    }

    public function destroy($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        $this->destroy_detail($id);
        if ($delete->trashed()) {
            return true;
        }
        return false;
    }

    public function destroy_detail($product_id)
    {
        $delete = Detail::where('product_id', $product_id);
        if (!empty($delete)) {
            $delete->delete();
        } else {
            return false;
        }
        return true;
    }

    public function getImages($product_id)
    {
        return ImageProduct::whereNull('deleted_at')->where('product_id', $product_id)->get();
    }

    public function getImgFirst($product_id)
    {
        return ImageProduct::whereNull('deleted_at')->where('product_id', $product_id)->first();
    }

    public function getBlockNewProduct($param = null)
    {
        $products = Product::whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        if (count($products)) {
            return $products;
        }
        return null;
    }
}
