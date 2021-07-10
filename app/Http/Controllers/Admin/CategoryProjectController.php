<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\CategoryProject;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

class CategoryProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(string $categorySlug)
    {
        $categoryName = Category::getNameBySlug($categorySlug);

        return view('admin/project/create', [
            'category' => $categorySlug,
            'categoryName' => $categoryName,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function store(StoreProjectRequest $request)
    {
        $record = new CategoryProject();

        $categorySlug = $request->get('category');
        $record->category_id = Category::getIdBySlug($categorySlug);

        $record->name = $request->get('name');
        $record->description = $request->get('description');

        $record->addMedia($request->file('backgroundImage'))->toMediaCollection('backgroundImage');
        $record->addMedia($request->file('primaryImage'))->toMediaCollection('primaryImage');

        if ($request->has('secondaryImage')) {
            foreach (request('secondaryImage') as $key => $secondaryImage) {
                $record->addMedia($secondaryImage)->toMediaCollection($key);
            }
        }

        $record->save();
        return redirect()->route("admin.{$categorySlug}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $categorySlug
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $categorySlug, int $id)
    {
        $categoryName = Category::getNameBySlug($categorySlug);
        $project = CategoryProject::find($id);

        return view('admin/project/edit', [
            'category' => $categorySlug,
            'categoryName' => $categoryName,
            'project' => $project,
            'primaryImage' => $project->getMedia('primaryImage'),
            'backgroundImage' => $project->getMedia('backgroundImage'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProjectRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProjectRequest $request, string $categorySlug, int $id)
    {
        $record = CategoryProject::find($id);

        $record->name = $request->get('name');
        $record->description = $request->get('description');
        $record->meta_title = $request->get('meta_title');
        $record->meta_keywords = $request->get('meta_keywords');
        $record->meta_description = $request->get('meta_description');

        if ($request->hasFile('backgroundImage')) {
            $record->addMedia($request->file('backgroundImage'))->toMediaCollection('backgroundImage');
        }
        if ($request->hasFile('primaryImage')) {
            $record->addMedia($request->file('primaryImage'))->toMediaCollection('primaryImage');
        }

        if ($request->has('secondaryImages')) {
            foreach (request('secondaryImages') as $key => $image) {
                $record->clearMediaCollection($key);
                $record->addMedia($request->all()['secondaryImages'][$key])
                    ->toMediaCollection($key);
            }
        }

        $record->save();
        return redirect()->route("admin.projects.edit", ['category' => $categorySlug, 'project' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $categorySlug
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $categorySlug, int $id)
    {
        $project = CategoryProject::where([
            'category_id' => Category::getIdBySlug($categorySlug),
            'id' => $id,
        ])->first();

        if (isset($project)) {
            $project->clearMediaCollection('primaryImage');
            $project->clearMediaCollection('backgroundImage');
            $project->clearMediaCollection('secondaryImages');
            $project->delete();
        }

        return redirect()->route("admin.{$categorySlug}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $categorySlug
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyImage(string $categorySlug, int $id, string $imageName)
    {
        $project = CategoryProject::where([
            'category_id' => Category::getIdBySlug($categorySlug),
            'id' => $id,
        ])->first();

        if (isset($project)) {
            $project->clearMediaCollection($imageName);
        }

        return redirect()->route("admin.projects.edit", ['category' => $categorySlug, 'project' => $id]);
    }
}
