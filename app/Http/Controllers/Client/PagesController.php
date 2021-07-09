<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function landingPage()
    {
        return view('client/pages/landing');
    }

    /**
     * @return Application|Factory|View
     */
    public function kitchenPage()
    {
        $projects = Category::getProjectByCategory(Route::current()->getName());

        return view('client/pages/kitchen', [
            'category' => Category::CATEGORY_KITCHEN,
            'projects' => $projects,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        $projects = Category::getProjectByCategory(Route::current()->getName());

        return view('client/pages/hall', [
            'category' => Category::CATEGORY_HALL,
            'projects' => $projects,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        $projects = Category::getProjectByCategory(Route::current()->getName());

        return view('client/pages/commercial', [
            'category' => Category::CATEGORY_COMMERCIAL,
            'projects' => $projects,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        $projects = Category::getProjectByCategory(Route::current()->getName());

        return view('client/pages/wardrobe', [
            'category' => Category::CATEGORY_WARDROBE,
            'projects' => $projects,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function childrenPage(Request $request)
    {
        $projects = Category::getProjectByCategory(Route::current()->getName());

        return view('client/pages/children', [
            'category' => Category::CATEGORY_CHILDREN,
            'projects' => $projects,
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function projectPage(string $category, int $id)
    {
        $project = CategoryProject::getFormattedProject($id);

        return view('client/pages/project', [
            'categoryName' => Category::getNameBySlug($category),
            'project' => $project,
        ]);
    }
}
