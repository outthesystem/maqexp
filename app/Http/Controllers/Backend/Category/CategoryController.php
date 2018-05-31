<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->search;

    if (isset($search)) {
      $categories = Category::where('name', 'like', '%' . $search . '%')
      ->paginate(15);
      }
      else {
      $categories = Category::paginate(15);
      }
      return view('backend.views.category.index', compact('categories', 'search'));
    }

    public function store(Request $request)
    {
          $category = new Category;
          $category->name = $request->name;
          $category->save();

          Session::flash('success', 'La categoria ha creado correctamente.');

          return redirect('/categories');
    }

    public function edit(Category $category)
    {
      return view('backend.views.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
      $category->name = $request->name;
      $category->save();

      Session::flash('success', 'La categoria se ha actualizado.');

      return redirect('/categories');
    }

    public function destroy(Category $category)
    {
      $category->delete();

      Session::flash('success', 'La categoria se ha eliminado correctamente.');

      return redirect('/categories');
    }
}
