<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRole;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $repository;

    function __construct(RoleRepository $role)
    {
        return $this->repository = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->repository->getDataIndex();
        return view('backend.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
    }

    public function saveData($request, $id = null)
    {
        $data = [
            'name' => $request->name,
        ];
        if (isset($request->active)) {
            $data += ['active' => 1];
        } else {
            $data += ['active' => 0];
        }
        return $this->repository->updateOrCreate($data, $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.role.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.role.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
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
        $role = $this->repository->getDataEdit($id);
        return view('backend.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Validaterole $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.role.index')->with(['message' => 'Cập nhật thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.role.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
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
        return redirect()->route('admin.role.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
