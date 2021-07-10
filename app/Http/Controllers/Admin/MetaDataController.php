<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoryMetaRequest;
use App\Models\Category;
use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($categorySlug)
    {
        $categoryName = Category::getNameBySlug($categorySlug);
        $meta = MetaData::getBySlug($categorySlug);

        return view('admin.meta.edit', [
            'category' => $categorySlug,
            'categoryName' => $categoryName,
            'meta' => $meta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryMetaRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryMetaRequest $request, $id)
    {
        $record = MetaData::getBySlug($id);
        $record->title = $request->get('title');
        $record->keywords = $request->get('keywords');
        $record->description = $request->get('description');
        $record->save();

        return redirect()->route('admin.meta.edit', ['metum' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
