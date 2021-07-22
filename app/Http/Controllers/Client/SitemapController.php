<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CategoryProject;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = CategoryProject::with('category')->get()->toArray();

        $sitemapUrls = [];
        foreach ($projects as $project) {
            $sitemapUrls[] = url("{$project['category']['slug']}/projects/{$project['id']}");
        }

        return response()->view('client.index', [
            'projects' => $sitemapUrls,
        ])->header('Content-Type', 'text/xml');
    }
}
