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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        return redirect()->route('admin.kitchen');
    }

    /**
     * @return Application|Factory|View
     */
    public function kitchenPage()
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_KITCHEN);

        return view('admin/category-page', [
            'category' => Category::CATEGORY_KITCHEN,
            'projects' => $projects
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_HALL);

        return view('admin/category-page', [
            'category' => Category::CATEGORY_HALL,
            'projects' => $projects
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_COMMERCIAL);

        return view('admin/category-page', [
            'category' => Category::CATEGORY_COMMERCIAL,
            'projects' => $projects
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_WARDROBE);

        return view('admin/category-page', [
            'category' => Category::CATEGORY_WARDROBE,
            'projects' => $projects
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function childrenPage()
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_CHILDREN);

        return view('admin/category-page', [
            'category' => Category::CATEGORY_CHILDREN,
            'projects' => $projects
        ]);
    }
}
