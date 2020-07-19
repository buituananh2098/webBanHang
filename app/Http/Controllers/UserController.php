<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUser;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;
    protected $path_image = '/uploads/user/';

    function __construct(UserRepository $user)
    {
        return $this->repository = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->getDataIndex();
        return view('backend.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoleRepository $role)
    {
        $roles = $role->getDataIndex();
        return view('backend.user.create', ['roles' => $roles]);
    }

    public function saveData($request, $id = null)
    {
        $data = [
            'name'     => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email'    => $request->email,
            'role    ' => $request->role,
        ];
        if (isset($request->active)) {
            $data += ['active' => 1];
        } else {
            $data += ['active' => 0];
        }
        if ($request->hasFile('avatar')) {
            $photoLogo  = $request->file('avatar');
            $image_logo = $photoLogo->getClientOriginalName();
            $photoLogo->move('uploads/user', $image_logo);
            $data['avatar'] = $this->path_image . $image_logo;
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
            return redirect()->route('admin.user.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.user.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
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
    public function edit($id, RoleRepository $role)
    {
        $user = $this->repository->getDataEdit($id);
        $role = $role->getDataIndex();
        return view('backend.user.edit', ['user' => $user, 'roles' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Validateuser $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.user.index')->with(['message' => 'Cập nhật thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.user.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
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
        return redirect()->route('admin.user.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
