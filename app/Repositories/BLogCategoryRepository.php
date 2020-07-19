<?php

namespace App\Repositories;

use App\Models\BlogCategory;
use Mockery\Exception;

class BLogCategoryRepository
{
    public function getDataIndex()
    {
        $data = null;
        try {
            $data = BlogCategory::whereNull('deleted_at')->orderBy('status', 'desc')->orderBy('sort', 'asc')->get();
        } catch (Exception $e) {
        }
        return $data;
    }

    public function getParent()
    {
        $data = null;
        try {
            $data = BlogCategory::whereNull('deleted_at')->where('parent_id', 0)->orderBy('status',
                'desc')->orderBy('sort',
                'asc')->get();
        } catch (Exception $e) {
        }
        return $data;
    }

    public function updateOrCreate($data, $id = null)
    {
        $data = BlogCategory::updateOrCreate(['id' => $id,], $data);
        if ($data->id) {
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        $data = null;
        try {
            $data = BlogCategory::find($id);
        } catch (Exception $e) {
        }
        return $data;
    }

    public function destroy($id)
    {
        $delete = BlogCategory::find($id);
        $delete->delete();
        if ($delete->trashed()) {
            return true;
        }
        return false;
    }
}
