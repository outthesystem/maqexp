<?php

namespace App\Http\Controllers\Backend\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Session;

class ProductController extends Controller
{
    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('/images');
    }

    public function index(Request $request)
    {
    $categories = Category::all();
    $search = $request->search;

    if (isset($search)) {
      $products = Product::where('name', 'like', '%' . $search . '%')
      ->orWhere('barcode', 'like', '%' . $search . '%')
      ->paginate(15);
      }
      else {
      $products = Product::paginate(15);
      }
      return view('backend.views.product.index', compact('products', 'categories', 'search'));
    }

    public function store(Request $request)
    {
          $product = new Product;
          $product->category_id = $request->category_id;
          $product->name = $request->name;
          $product->description = $request->description;
          $product->barcode = $request->barcode;
          $product->quantity = $request->quantity;
          $product->price = $request->price;
          $product->save();

          Session::flash('success', 'El producto ha creado correctamente.');

          return redirect('/products');
    }


    public function edit(Product $product)
    {
      $categories = Category::all();


      return view('backend.views.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {

      if (!is_dir($this->photos_path)) {
          mkdir($this->photos_path, 0777);
      }

      if ( $request->hasFile('file')){
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->move('images' , $name);
            $inputs = $request->all();
            $inputs['path'] = $name;
            $product->image = $file->getClientOriginalName();
            $product->save();
          }

      $product->category_id = $request->category_id;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->barcode = $request->barcode;
      $product->quantity = $request->quantity;
      $product->price = $request->price;
      $product->save();

      Session::flash('success', 'El producto se ha actualizado.');

      return redirect('/product/'.$product->id);
    }

    public function destroy(Product $product)
    {
      $product->delete();

      Session::flash('success', 'El producto se ha eliminado correctamente.');

      return redirect('/products');
    }
}
