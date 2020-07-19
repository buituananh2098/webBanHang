<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getDataIndex()
    {
        return Category::whereNull('deleted_at')
            ->orderBy('sort', 'asc')->get();
    }

    public function  getCollectionNameHighlight(){
        $data = Category::whereNull('deleted_at')
            ->where([
                'highlight' => 1,
                'status' => 1,
                'is_collection' => 1
            ])
            ->orderBy('sort', 'asc')->limit(6)->get();
        return $data;
    }

    public function  getCollectionNameNew(){
        $data = Category::whereNull('deleted_at')
            ->where([
                'status' => 1,
                'is_collection' => 1
            ])
            ->orderBy('created_at', 'desc')->limit(2)->get();
        return $data;
    }

    public function getParent($limit = null)
    {
        if ($limit) {
            return Category::whereNull('deleted_at')
                ->where('parent_id', 0)->where('status', 1)
                ->orderBy('sort', 'asc')->limit($limit)->get();
        }
        return Category::whereNull('deleted_at')
            ->where('parent_id', 0)->where('status', 1)
            ->orderBy('sort', 'asc')->get();
    }

    public function getChildCategory($parentId)
    {
        return Category::whereNull('deleted_at')
            ->where('parent_id', $parentId)->where('status', 1)
            ->orderBy('sort', 'asc')->get();
    }

    public function getHighLight()
    {
        return Category::whereNull('deleted_at')
            ->where([
                'highlight' => 1,
                'status' => 1
            ])
            ->orderBy('sort', 'asc')->limit(16)->get();
    }

    public function updateOrCreate($data, $id = null)
    {
        $data = Category::updateOrCreate(['id' => $id,], $data);
        if ($data->id) {
            return true;
        }
        return false;
    }

    public function getDataEdit($id)
    {
        return Category::find($id);
    }

    public function destroy($id)
    {
        $delete = Category::find($id);
        $delete->delete();
        if ($delete->trashed()) {
            return true;
        }
        return false;
    }
}
