<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProject;
use App\Models\MetaData;
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
        $projects = Category::getProjectByCategoryWithSlug(Category::CATEGORY_KITCHEN);

        return view('client/pages/kitchen', [
            'category' => Category::CATEGORY_KITCHEN,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_KITCHEN)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        $projects = Category::getProjectByCategoryWithSlug(Category::CATEGORY_HALL);

        return view('client/pages/hall', [
            'category' => Category::CATEGORY_HALL,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_HALL)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        $projects = Category::getProjectByCategoryWithSlug(Category::CATEGORY_COMMERCIAL);

        return view('client/pages/commercial', [
            'category' => Category::CATEGORY_COMMERCIAL,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_COMMERCIAL)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        $projects = Category::getProjectByCategoryWithSlug(Category::CATEGORY_WARDROBE);

        return view('client/pages/wardrobe', [
            'category' => Category::CATEGORY_WARDROBE,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_WARDROBE)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function childrenPage(Request $request)
    {
        $projects = Category::getProjectByCategory(Category::CATEGORY_CHILDREN);

        return view('client/pages/children', [
            'category' => Category::CATEGORY_CHILDREN,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_CHILDREN)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function projectPage(string $category, string $projectSlug)
    {
        $project = CategoryProject::getFormattedProject($projectSlug);
        
        return view('client/pages/project', [
            'categorySlug' => Category::getRouteBySlug($category),
            'categoryName' => Category::getNameBySlug($category),
            'project' => $project,
            'metaData' => MetaData::getForProjectById($projectSlug)
        ]);
    }
}
