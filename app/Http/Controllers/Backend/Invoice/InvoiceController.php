<?php

namespace App\Http\Controllers\Backend\Invoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Product;
use App\Invoice;
use App\Category;
use App\InvoiceItem;
use Session;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function makeinvoice()
    {
      $clients = Client::orderBy('name', 'asc')->get();

      return view('backend.views.invoice.makeinvoice', compact('clients'));
    }

    public function selectproduct(Client $client, Request $request)
    {
      $confirmed = false;

      if (isset($request->dni)) {
        if ($client->dni != $request->dni) {
          $confirmed = false;
          return redirect('/');
        }
          else {
            $confirmed = true;
            $invoice = Invoice::create([
              'client_id' => $client->id,
              'total' => 0,
            ]);
            $categories = Category::with('products')->get();
          }
        }
      return view('backend.views.invoice.selectproduct', compact('client', 'confirmed', 'categories', 'invoice'));
    }

    public function selectproduct1(Client $client, Invoice $invoice, Request $request)
    {
      $confirmed = true;

      $categories = Category::with('products')->get();

      return view('backend.views.invoice.selectproduct', compact('client', 'confirmed', 'categories', 'invoice'));
    }

    public function categoryselected(Client $client, Category $category, Invoice $invoice, Request $request)
    {
      return view('backend.views.invoice.categoryselected', compact('client', 'category', 'invoice'));
    }

    public function additem(Client $client, Product $product, Invoice $invoice, Request $request)
    {
      $invoiceitem = InvoiceItem::create([
        'invoice_id' => $invoice->id,
        'product_id' => $product->id,
        'quantity' => 1,
        'price' => $product->price,
        'price_total' => $product->price,
      ]);

      $actquantity = $product->quantity - 1;

      $product->quantity = $actquantity;
      $product->update();

      $modifyinvoice = $invoice->total + $invoiceitem->price_total;

      $invoice->total = $modifyinvoice;
      $invoice->update();

      Session::flash('success', 'Se agrego el producto correctamente.');

      return redirect('/selectproduct1/'.$client->id.'/'.$invoice->id);
    }

    public function deleteitem(InvoiceItem $item)
    {
      $invoice = Invoice::find($item->invoice_id);
      $newtotal = $item->price_total - $invoice->total;
      $invoice->total = $newtotal;
      $invoice->update();

      $product = Product::find($item->product_id);

      $actquantity = $product->quantity + 1;

      $product->quantity = $actquantity;
      $product->update();

      $item->delete();

      Session::flash('success', 'Se elimino el producto del pedodp correctamente.');

      return redirect('/selectproduct1/'.$invoice->client_id.'/'.$invoice->id);
    }

    public function confirminvoice(Client $client, Invoice $invoice)
    {
      $invoice->finished = TRUE;
      $invoice->update();

      Session::flash('success', 'Se realizo el pedido correctamente, puedes pedirlo con tu DNI.');

      return redirect('/');
    }

    public function deliverinvoice(Client $client, Invoice $invoice)
    {
      $invoice->finished = FALSE;
      $invoice->delivered = TRUE;
      $invoice->update();

      Session::flash('success', 'Se entrego el pedido correctamente.');

      return redirect('/client/'.$invoice->client_id);

    }

    public function paidinvoice(Client $client, Invoice $invoice)
    {
      $invoice->finished = FALSE;
      $invoice->delivered = FALSE;
      $invoice->paid = TRUE;
      $invoice->date_paid = Carbon::now();
      $invoice->update();

      Session::flash('success', 'Se cobro el pedido correctamente.');

      return redirect('/client/'.$invoice->client_id);

    }

    public function cancelinvoice(Client $client, Invoice $invoice)
    {
      foreach ($invoice->items as $i) {
        $product = Product::find($i->product_id);
        $actquantity = $product->quantity + $i->quantity;
        $product->quantity = $actquantity;
        $product->update();
        $i->delete();
      }

      $invoice->delete();

      Session::flash('success', 'Se ha cancelado el pedido correctamente.');

      return redirect('/');
    }
}
