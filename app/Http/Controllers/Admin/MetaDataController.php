<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoryMetaRequest;
use App\Models\Category;
use App\Models\MetaData;

class MetaDataController extends Controller
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $categoryKey
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $categoryKey)
    {
        $categorySlug = Category::getSlugByKey($categoryKey);

        $categoryName = Category::getNameBySlug($categorySlug);
        $meta = MetaData::getBySlug($categorySlug);

        return view('admin.meta.edit', [
            'category' => $categoryKey,
            'categoryName' => $categoryName,
            'meta' => $meta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryMetaRequest $request
     * @param string $categoryKey
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryMetaRequest $request, string $categoryKey)
    {
        $record = MetaData::getBySlug(Category::getSlugByKey($categoryKey));
        $record->title = $request->get('title');
        $record->keywords = $request->get('keywords');
        $record->description = $request->get('description');
        $record->save();

        session()->flash('status', 'Мета данные успешно отредактированы!');

        return redirect()->route('admin.categories.meta.edit', [
            'categoryKey' => $categoryKey
        ]);
    }
}
