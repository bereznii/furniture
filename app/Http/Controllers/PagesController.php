<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        return view('client/pages/kitchen');
    }

    /**
     * @return Application|Factory|View
     */
    public function hallPage()
    {
        return view('client/pages/hall');
    }

    /**
     * @return Application|Factory|View
     */
    public function commercialPage()
    {
        return view('client/pages/commercial');
    }

    /**
     * @return Application|Factory|View
     */
    public function wardrobePage()
    {
        return view('client/pages/wardrobe');
    }
}
