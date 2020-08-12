<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\DataTables\CategoriesDataTable;
use App\Models\Category;
use App\Models\ClassModel;

class CategoriesController extends Controller
{
    private $viewPath = 'backend.categories';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
          'title' => trans('main.show-all') . ' ' . trans('main.categories')
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cls = ClassModel::all();
        return view("{$this->viewPath}.create", [
          'title' => trans('main.add') . ' ' . trans('main.categories'),
          'cls' => $cls,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        $requestAll = $request->all();

        $cat =  Category::create($requestAll);

        session()->flash('success', trans('main.added-message'));
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::findOrFail($id);
        return view("{$this->viewPath}.show", [
          'title' => trans('main.show') . ' ' . trans('main.category') . ' : ' . $cat->name,
          'show' => $cat,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        $cls = ClassModel::all();
        return view("{$this->viewPath}.edit", [
          'title' => trans('main.edit') . ' ' . trans('main.category') . ' : ' . $cat->name,
          'edit' => $cat,
          'cls' => $cls,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->slug = $request->slug;
        $cat->class_id = $request->class_id;
        $cat->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('categories.show', [$cat->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  bool  $redirect
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $redirect = true)
    {
        $cat = Category::findOrFail($id);

        $cat->delete();

        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('categories.index');
        }
    }


    /**
     * Remove the multible resource from storage.
     *
     * @param  array  $data
     * @return \Illuminate\Http\Response
     */
    public function multi_delete(Request $request)
    {
        if (count($request->selected_data)) {
            foreach ($request->selected_data as $id) {
                $this->destroy($id, false);
            }
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('categories.index');
        }
    }
}
