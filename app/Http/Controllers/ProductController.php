<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateProduct;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $repository;
    protected $path_image = '/uploads/products/';

    function __construct(ProductRepository $product)
    {
        return $this->repository = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->getDataPaging();
        return view('backend.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = new CategoryRepository();
        return view('backend.product.create', [
            'parents' => $parent->getDataIndex()
        ]);
    }

    public function saveData($request, $id = null)
    {
        $product = [
            'name' => $request->name,
            'code' => $request->code,
            'reward_points' => $request->reward_points,
            'cost' => $request->cost,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];
        $product_detail = [
            'info_detail' => $request->info_detail,
            'salient_features' => $request->salient_features,
            'introductions' => $request->introductions,
            'production_process' => $request->production_process,
        ];
        $relax = [$request->category_id,
        ];

        if ($request->hasFile('logo')) {
            $photo = $request->file('logo');
            $image_avt = $photo->getClientOriginalName();
            $photo->move('uploads/products', $image_avt);
            $product['images'] = $this->path_image . $image_avt;
        }
        return $this->repository->updateOrCreate($product, $product_detail, $relax, $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateProduct $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.product.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.product.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
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
        $product = $this->repository->getDataEdit($id);
        if ($product) {
            $parent = new CategoryRepository();
            return view('backend.product.edit', [
                'parents' => $parent->getDataIndex(),
                'product' => $product
            ]);
        }
        return redirect()->route('admin.product.index')->with(['message' => 'Sản phẩm không tồn tại', 'type' => 'error']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateProduct $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.product.index')->with(['message' => 'Cập nhật thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.product.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
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
        return redirect()->route('admin.product.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
