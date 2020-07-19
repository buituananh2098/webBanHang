<?php

//áp dụng cho thêm mới danh mục và sửa danh mục
function cat_parent($data, $parent = 0, $str = "", $select = 0)
{
    foreach ($data as $value) {
        $id = $value["id"];
        $name = $value["name"];
        if ($value['parent_id'] == $parent) {
            if ($select != 0 && $id == $select && $value['deleted_at'] == null) {
                echo "<option value='$id' selected = 'selected'>$str $name</option>";
            } else {
                echo "<option value='$id'>$str $name</option>";
            }
            cat_parent($data, $id, $str . "--|", $select);
        }
    }
}

//áp dụng cho các chức năng khác lên quan tới lấy danh mục
function selectCates($categories, $parent_id = 0, $string = '', $cate = null, $cateIDParen = '')
{
    $cate_child = array();

    foreach ($categories as $key => $itemCT) {
        if ($itemCT->parent_id == $parent_id) {
            $cate_child[] = $itemCT;
            if ($itemCT->parent_id == 0) {
                // $cateIDParen[] = $itemCT;
            } else {
                $cateIDParen = $itemCT->parent_id;
            }
            unset($categories[$key]);
        }
    }

    if ($cate_child) {
        foreach ($cate_child as $key => $item) {
            if ($item->id == $cate) {
                $checked = 'selected';
            } else {
                $checked = '';
            }

            echo '<option data-id=' . $item->id . ' data-par=' . json_encode($cateIDParen) . ' ' . $checked . ' value="' . $item->id . '">' . $string . $item->name . '</option>';
            selectCates($categories, $item->id, $string . '---| ', $cate, $cateIDParen);
        }
    }
}

function load_image($product_id)
{
    $images = new \App\Repositories\ProductRepository();
    return $images->getImages($product_id);
}

function load_avt($product_id)
{
    $images = new \App\Repositories\ProductRepository();
    return $images->getImgFirst($product_id)->path;
}

function load_product($product_id)
{
    $product = new \App\Repositories\ProductRepository();
    return $product->getDataById($product_id);
}

function current_price($price)
{
    $current = '';
    while (strlen($price) >= 4) {
        $current = '.' . substr($price, -3) . $current;
        $price = substr($price, 0, -3);
    }
    return $price . $current;
}

function getChildCategory($parentId)
{
    try {
        $category = new \App\Repositories\CategoryRepository();
        return $category->getChildCategory($parentId);
    } catch (Exception $e) {
        return false;
    }
}
