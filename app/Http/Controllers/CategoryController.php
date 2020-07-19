<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateCategory;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    const DIR = '/';
    protected $repository;
    protected $path_image = 'uploads/category';

    function __construct(CategoryRepository $cate)
    {
        return $this->repository = $cate;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryRepository $cate)
    {
        $cates = $this->repository->getDataIndex();
        $collectionNew = $this->repository->getCollectionNameHighlight();
        $collectionHot = $this->repository->getCollectionNameNew();
        return view('backend.category.index',
            ['cates' => $cates, 'collectionNew' => $collectionNew, 'collectionHot' => $collectionHot]);
    }

    public function getCollectionName()
    {
        $cate = $this->repository->getCollectionName();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cateParent = null)
    {
        $parents = $this->repository->getDataIndex();
        return view('backend.category.create', ['parents' => $parents, 'cateParent' => $cateParent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveData($request, $id = null)
    {
        $data = [
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'parent_id' => $request->parent_id,
        ];
        $data['status'] = isset($request->status) ? 1 : 0;
        $data['highlight'] = isset($request->highlight) ? 1 : 0;
        $data['is_collection'] = isset($request->isCollection) ? 1 : 0;

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

    public function store(ValidateCategory $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.category.index')->with([
                'message' => 'Thêm mới thành công',
                'type' => 'success'
            ]);
        } else {
            return redirect()->route('admin.category.index')->with([
                'message' => 'Thêm mới thất bại',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parents = $this->repository->getDataIndex();
        return view('backend.category.edit', [
            'parents' => $parents,
            'category' => $this->repository->getDataEdit($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateCategory $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.category.index')->with([
                'message' => 'Cập nhật thành công',
                'type' => 'success'
            ]);
        } else {
            return redirect()->route('admin.category.index')->with([
                'message' => 'Cập nhật thất bại',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route('admin.category.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
