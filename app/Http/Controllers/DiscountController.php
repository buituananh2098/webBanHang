<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateDiscount;
use Illuminate\Http\Request;
use App\Repositories\DiscountRepository;//sử dụng đối tượng

class DiscountController extends Controller
{
    protected $repository; //Biến reposi (khai báo)

    public function __construct(
        DiscountRepository $discountRepository
    )
    {
        //Gán đối tượng
        $this->repository = $discountRepository; // khi gán xong nó sẽ liên kết đến đối tượng mình khai báo
    }

    public function index()
    {
        $discount = $this->repository->getDataIndex();
        return view('backend.discount.index', ['discounts' => $discount]);
    }

    public function create()
    {
        return view('backend.discount.create');
    }
    public function saveData($request, $id = null)
    {
        $data = [
            'code' => $request->code,
            'description' => $request->description,
            'type_discount' => $request->type_discount,
            'value_discount' => $request->value_discount,
            'start_date' => $request->start_date,
            'expired_date' => $request->expired_date,
            'quantity' => $request->quantity,
        ];
        $user = auth()->user();
        if($user){
            $data+= ['created_by' => $user->id];
        }
        return $this->repository->updateOrCreate($data, $id);
    }
    /**type_discount
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.discount.index')->with(['message' => 'Thêm mới mã giảm giá thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.discount.index')->with(['message' => 'Thêm mới mã giảm giá thất bại', 'type' => 'error']);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount = $this->repository->getDataEdit($id);
        return view('backend.discount.edit', ['discount' => $discount]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateDiscount $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.discount.index')->with(['message' => 'Cập nhật mã giảm giá thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.discount.index')->with(['message' => 'Cập nhật mã giảm giá thất bại', 'type' => 'error']);
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
        return redirect()->route('admin.discount.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
