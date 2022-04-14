<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use App\Models\CategoryProject;

class ProjectsController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param string $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $categoryKey)
    {
        $slug = Category::getSlugByKey($categoryKey);

        return view('admin/project/index', [
            'categoryKey' => $categoryKey,
            'projects' => Category::getProjectByCategory($slug),
            'categoryName' => Category::getNameBySlug($slug),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(string $categoryKey)
    {
        $slug = Category::getSlugByKey($categoryKey);

        return view('admin/project/create', [
            'categoryKey' => $categoryKey,
            'categoryName' => Category::getNameBySlug($slug),
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

        $category = $request->get('category');
        $record->category_id = Category::getIdBySlug(Category::getSlugByKey($category));

        $record->name = $request->get('name');
        $record->slug = $request->get('slug');
        $record->description = $request->get('description');

        $record->addMedia($request->file('backgroundImage'))->toMediaCollection('backgroundImage');
        $record->addMedia($request->file('primaryImage'))->toMediaCollection('primaryImage');

        if ($request->has('secondaryImage')) {
            foreach (request('secondaryImage') as $key => $secondaryImage) {
                $record->addMedia($secondaryImage)->toMediaCollection($key);
            }
        }

        $record->save();

        $request->session()->flash('status', 'Проект успешно добавлен!');

        return redirect()->route('admin.categories.projects.edit', [
            'categoryKey' => $category,
            'id' => $record->id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $categoryKey
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $categoryKey, int $id)
    {
        $project = CategoryProject::find($id);

        return view('admin/project/edit', [
            'categoryKey' => $categoryKey,
            'categoryName' => $project->category->name,
            'project' => $project,
            'primaryImage' => $project->getMedia('primaryImage'),
            'backgroundImage' => $project->getMedia('backgroundImage'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProjectRequest $request
     * @param string $categoryKey
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function update(UpdateProjectRequest $request, string $categoryKey, int $id)
    {
        $record = CategoryProject::find($id);

        $record->name = $request->get('name');
        $record->slug = $request->get('slug');
        $record->description = $request->get('description');
        $record->meta_title = $request->get('meta_title');
        $record->meta_keywords = $request->get('meta_keywords');
        $record->meta_description = $request->get('meta_description');

        if ($request->hasFile('backgroundImage')) {
            $record->clearMediaCollection('backgroundImage');
            $record->addMedia($request->file('backgroundImage'))->toMediaCollection('backgroundImage');
        }
        if ($request->hasFile('primaryImage')) {
            $record->clearMediaCollection('primaryImage');
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

        $request->session()->flash('status', 'Проект успешно отредактирован!');

        return redirect()->route("admin.categories.projects.edit", ['categoryKey' => $categoryKey, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $categoryKey
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $categoryKey, int $id)
    {
        $project = CategoryProject::findOrFail($id);

        if (isset($project)) {
            $project->clearMediaCollection('primaryImage');
            $project->clearMediaCollection('backgroundImage');
            $project->clearMediaCollection('secondaryImages');
            $project->delete();

            session()->flash('status', 'Проект успешно удален!');
        }

        return redirect()->route('admin.categories.projects.index', [
            'categoryKey' => $categoryKey
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $categoryKey
     * @param int $id
     * @param string $imageName
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyImage(string $categoryKey, int $id, string $imageName)
    {
        $project = CategoryProject::findOrFail($id);

        if (isset($project)) {
            $project->clearMediaCollection($imageName);

            session()->flash('status', 'Фото успешно удалено!');
        }

        return redirect()->route("admin.categories.projects.edit", ['categoryKey' => $categoryKey, 'id' => $id]);
    }
}
