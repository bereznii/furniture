<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private const CATEGORY_KITCHEN = 'kitchen';
    private const CATEGORY_HALL = 'hall';
    private const CATEGORY_WARDROBE = 'wardrobe';
    private const CATEGORY_COMMERCIAL = 'commercial';
    private const CATEGORY_CHILDREN= 'children';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * @return Application|Factory|View
     */
    public function kitchenPage()
    {
        $projects = Category::getProjectByCategory(self::CATEGORY_KITCHEN);

        return view('admin/category-page', [
            'categoryName' => self::CATEGORY_KITCHEN,
            'projects' => $projects
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        return view('admin/category-page', [
            'categoryName' => self::CATEGORY_HALL
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        return view('admin/category-page', [
            'categoryName' => self::CATEGORY_COMMERCIAL
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        return view('admin/category-page', [
            'categoryName' => self::CATEGORY_WARDROBE
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function childrenPage()
    {
        return view('admin/category-page', [
            'categoryName' => self::CATEGORY_CHILDREN
        ]);
    }
}
