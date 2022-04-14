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
        $projects = Category::getProjectsWithSlugByCategoryKey(Category::CATEGORY_KITCHEN_KEY);

        return view('client/pages/kitchen', [
            'category' => Category::CATEGORY_KITCHEN_SLUG,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_KITCHEN_SLUG)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        $projects = Category::getProjectsWithSlugByCategoryKey(Category::CATEGORY_HALL_KEY);

        return view('client/pages/hall', [
            'category' => Category::CATEGORY_HALL_SLUG,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_HALL_SLUG)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        $projects = Category::getProjectsWithSlugByCategoryKey(Category::CATEGORY_COMMERCIAL_KEY);

        return view('client/pages/commercial', [
            'category' => Category::CATEGORY_COMMERCIAL_SLUG,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_COMMERCIAL_SLUG)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        $projects = Category::getProjectsWithSlugByCategoryKey(Category::CATEGORY_WARDROBE_KEY);

        return view('client/pages/wardrobe', [
            'category' => Category::CATEGORY_WARDROBE_SLUG,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_WARDROBE_SLUG)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function childrenPage(Request $request)
    {
        $projects = Category::getProjectsWithSlugByCategoryKey(Category::CATEGORY_CHILDREN_KEY);

        return view('client/pages/children', [
            'category' => Category::CATEGORY_CHILDREN_SLUG,
            'projects' => $projects,
            'metaData' => MetaData::getForCategoryPageBySlug(Category::CATEGORY_CHILDREN_SLUG)
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function projectPage(string $category, string $projectSlug)
    {
        $project = CategoryProject::getFormattedProject($projectSlug);

        return view('client/pages/project', [
            'categorySlug' => Category::getKeyBySlug($category),
            'categoryName' => Category::getNameBySlug($category),
            'project' => $project,
            'metaData' => MetaData::getForProjectById($projectSlug)
        ]);
    }
}
