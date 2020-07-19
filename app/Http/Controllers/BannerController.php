<?php

namespace App\Http\Controllers;

use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    const DIR = '/';
    protected $repository;
    protected $path_image = 'uploads/banner';

    function __construct(BannerRepository $banner)
    {
        return $this->repository = $banner;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = $this->repository->getBanner();
        return view('backend.banner.index', ['banner' => $banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
            'alt' => $request->alt,
            'title' => $request->title,
            'link' => $request->link,
            'sort' => $request->sort,
        ];
        try {
            if ($request->hasFile('avatar')) {
                $photo = $request->file('avatar');
                $image_avt = $photo->getClientOriginalName();
                $photo->move($this->path_image, $image_avt);
                $data['path'] = self::DIR . $this->path_image . self::DIR . $image_avt;
            }
        } catch (Exception $e) {
            return redirect()->back()->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        }
        return $this->repository->create($data);
    }

    public function store(Request $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.banner.index')->with(['message' => 'Thêm mới thành công', 'type' => 'success']);
        } else {
            return redirect()->route('admin.banner.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);
        }
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route('admin.banner.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
