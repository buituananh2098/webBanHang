<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateCategory;
use  App\Repositories\BLogCategoryRepository;
use mysql_xdevapi\Exception;
class BlogCategoryController extends Controller
{
    const DIR = '/';
    protected $repository;
    protected $path_image = 'uploads/category';
    function __construct(BLogCategoryRepository $blog_categories)
    {
        return $this->repository = $blog_categories;
    }

    public  function  menu(){
        $blog_categories = $this->repository->getDataIndex();
       // dd($blog_categories);
        return view('frontend.pages.blog', ['blog_categories' => $blog_categories]);
    }
    public function index()
    {
        $blog_categories = $this->repository->getDataIndex();
        return view('backend.blog_category.index', ['blog_categories' => $blog_categories]);
    }

    public function create($cateParent = null)
    {
        $parents = $this->repository->getDataIndex();
        return view('backend.blog_category.create', ['parents' => $parents, 'cateParent' => $cateParent]);
    }

    public function saveData($request, $id = null)
    {
        $data = [
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'parent_id' => $request->parent_id,
        ];
        $data['status'] = isset($request->status) ? 1 : 0;
        $data['highlight'] = isset($request->highlight) ? 1 : 0;

        try {
            if ($request->hasFile('avatar')) {
                $photo = $request->file('avatar');
                $image_avt = $photo->getClientOriginalName();
                $photo->move($this->path_image, $image_avt);
                $data['avatar'] = self::DIR . $this->path_image . self::DIR . $image_avt;
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        }
        return $this->repository->updateOrCreate($data, $id);
    }

    public function edit($id)
    {
        $parents = $this->repository->getDataIndex();
        return view('backend.blog_category.edit', [
            'parents' => $parents,
            'blog_category' => $this->repository->getDataEdit($id),
        ]);
    }

    public function update(ValidateCategory $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.blog_category.index')->with(['message' => 'Cập nhật thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.blog_category.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
        }
    }

    public function store(ValidateCategory $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.blog_category.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.blog_category.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
        }
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route('admin.blog_category.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
