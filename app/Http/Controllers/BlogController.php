<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateBlog;
use App\Models\BlogCategory;
use  App\Repositories\BlogRepository;
use  App\Repositories\BLogCategoryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mockery\Exception;
use phpDocumentor\Reflection\DocBlock\Description;

class BlogController extends Controller
{
    const DIR = '/';
    protected $repository;
    protected $path_image = 'http://att.lc/uploads/blogs/';

    function __construct(BlogRepository $blog)
    {
        return $this->repository = $blog;
    }

    public function detailBlog(Request $request)
    {
        $id = $request->id;
        $blog = $this->repository->getDataById($id);
        return view('frontend.pages.blogdetail', [
            '

        blog' => $blog
        ]);
    }

    public function menu()
    {
        $blog_categories = BlogCategory::whereNull('deleted_at')->orderBy('status', 'desc')->orderBy('sort',
            'asc')->get();
        return $blog_categories;
    }

    public function blogWithCate($slug = null, $id = null)
    {
        $url = $slug;
        $detail_id = $id;
        $blog = null;
        if (!empty($url) && empty($detail_id)) {
            $cate_id = BlogCategory::whereNull('deleted_at')->where('slug', '=', $url)->get('id');
            $blog = $this->repository->getDataByCategory($cate_id[0]->id);
            foreach ($blog as $blg) {
                $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y ');
                $blg->created_at = $format_created_date;
            }
            return view('frontend.pages.blog',
                ['blog' => $blog, 'blog_categories' => $this->menu()]);
        } else {
            if (!empty($url) && !empty($detail_id)) {
                $blog_detail = $this->repository->getDataById($detail_id);
                $format_created_date = Carbon::parse($blog_detail[0]->created_at)->format('d/m/Y ');
                $blog_detail[0]->created_at = $format_created_date;
                return view('frontend.pages.blogdetail',
                    ['blog' => $blog_detail, 'blog_categories' => $this->menu()]);
            } else {
                $blog = $this->repository->getDataIndex();
                foreach ($blog as $blg) {
                    $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y');
                    $blg->created_at = $format_created_date;
                }
                return view('frontend.pages.blog',
                    ['blog' => $blog, 'blog_categories' => $this->menu()]);
            }
        }


    }

    public function blogWithTitle(Request $request){
        $keyword = $request -> keyword_search;
        if(!empty($keyword)){
            $blog = $this->repository->getDataByName($keyword);
            foreach ($blog as $blg) {
                $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y');
                $blg->created_at = $format_created_date;
            }
        }
        else{
            $blog = $this->repository->getDataIndex();
            foreach ($blog as $blg) {
                $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y');
                $blg->created_at = $format_created_date;
            }

        }
        return view('frontend.pages.blog',
            ['blog' => $blog, 'blog_categories' => $this->menu()]);
    }

    public function blogWithAuthor($author_blog = null)
    {
        if ($author_blog != null) {
            $blog = $this->repository->getDataByAuthor($author_blog);
            foreach ($blog as $blg) {
                $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y ');
                $blg->created_at = $format_created_date;
            }
            return view('frontend.pages.blog',
                ['blog' => $blog, 'blog_categories' => $this->menu()]);
        }
    }

    public function create()
    {
        $parents = new BLogCategoryRepository();
        $parents->getDataIndex();
        return view('backend.blog.create', [
            'parents' => $parents->getDataIndex(),
        ]);
    }

    public function search(Request $request)
    {
        $keyWord = $request->keyWord;
        if ($keyWord == null) {
            $blog = $this->repository->getDataIndex();
        } else {
            if (empty($keyWork[0]) != false) {
                $blog = $this->repository->getDataByName($keyWord[0]);
            }
        }
        foreach ($blog as $blg) {
            $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y H:i:s');
            $format_updated_date = Carbon::parse($blg->updated_at)->format('d/m/Y H:i:s');
            $blg->created_at = $format_created_date;
            $blg->updated_at = $format_updated_date;
        }
        return view('backend.blog.index', ['blog' => $blog]);
    }

    public function index()
    {
        $blog = $this->repository->getDataIndex();
        foreach ($blog as $blg) {
            $format_created_date = Carbon::parse($blg->created_at)->format('d/m/Y H:i:s');
            $format_updated_date = Carbon::parse($blg->updated_at)->format('d/m/Y H:i:s');
            $blg->created_at = $format_created_date;
            $blg->updated_at = $format_updated_date;
        }
        return view('backend.blog.index', ['blog' => $blog]);

    }

    public function store(ValidateBlog $request)
    {
        if ($this->saveData($request)) {
            return redirect()->route('admin.blog.index')->with([
                'message' => 'Thêm mới thành công',
                'type' => 'success'
            ]);
        } else {
            return redirect()->route('admin.blog.index')->with(['message' => 'Thêm mới thất bại', 'type' => 'error']);


        }
    }


    public function saveData($request, $id = null)
    {
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $image = $photo->getClientOriginalName();
            $photo->move('uploads/blogs/', $image);
            $blog['images'] = $this->path_image . $image;
        }
        if ($request->hasFile('image')) {
            $blog = [
                'title_blog' => $request->title_blog,
                'author_blog' => $request->author_blog,
                'content_blog' => $request->editor1,
                'blog_cate_id' => $request->blog_category_id,
                'images' => $this->path_image . $image,
            ];
        } else {
            $blog = [
                'title_blog' => $request->title_blog,
                'author_blog' => $request->author_blog,
                'content_blog' => $request->editor1,
                'blog_cate_id' => $request->blog_category_id
            ];
        }
        if ($request->title_blog == null || $request->author_blog == null || $request->editor1 == null) {
            return;
        }
        return $this->repository->updateOrCreate($blog, $id);
    }

    public function edit($id)
    {
        $blog = $this->repository->getDataEdit($id);
        if ($blog) {
            $parents = new BLogCategoryRepository();
            return view('backend.blog.edit', [
                'parents' => $parents->getDataIndex(),
                'blog' => $blog,
            ]);
        };

        return redirect()->route('admin.blog.index')->with(['message' => 'Sản phẩm không tồn tại', 'type' => 'error']);
    }

    public function update(ValidateBlog $request, $id)
    {
        if ($this->saveData($request, $id)) {
            return redirect()->route('admin.blog.index')->with([
                'message' => 'Cập nhật thành công',
                'type' => 'success'
            ]);
        } else {
            return redirect()->route('admin.blog.index')->with(['message' => 'Cập nhật thất bại', 'type' => 'error']);
        }
    }

    public function destroy($id)
    {
        $this->repository->destroy($id);
        return redirect()->route('admin.blog.index')->with(['message' => 'Xóa thành công', 'type' => 'success']);
    }
}
