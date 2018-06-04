<?php

namespace App\Http\Controllers\Backend\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Invoice;
use Session;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->search;

    if (isset($search)) {
      $clients = Client::where('name', 'like', '%' . $search . '%')
      ->paginate(15);
      }
      else {
      $clients = Client::paginate(15);
      }
      return view('backend.views.client.index', compact('clients', 'search'));
    }

    public function store(Request $request)
    {
          $client = new Client;
          $client->name = $request->name;
          $client->dni = $request->dni;
          $client->phone = $request->phone;
          $client->save();

          Session::flash('success', 'El cliente ha creado correctamente.');

          return redirect('/clients#add_new_client');
    }

    public function edit(Client $client)
    {
      $finishedi = Invoice::where('client_id', '=', $client->id)->Finished()->get();
      $deliveredi = Invoice::where('client_id', '=', $client->id)->Delivered()->get();
      $paidi = Invoice::where('client_id', '=', $client->id)->Paid()->get();

      return view('backend.views.client.edit', compact('client', 'finishedi', 'deliveredi', 'paidi'));
    }

    public function update(Request $request, Client $client)
    {
      $client->name = $request->name;
      $client->dni = $request->dni;
      $client->phone = $request->phone;
      $client->save();

      Session::flash('success', 'El cliente se ha actualizado.');

      return redirect('/client/'.$client->id);
    }

    public function destroy(Client $client)
    {
      $client->delete();

      Session::flash('success', 'El cliente se ha eliminado correctamente.');

      return redirect('/clients');
    }

    public function exportInvoicesF(Client $client)
    {

           Excel::create('Pedidos realizados'.$client->name, function($excel) use($client) {

               $excel->sheet('Pedidos realizados', function($sheet)  use($client) {

                   $products = Invoice::where('client_id', '=', $client->id)->Finished()->get();

                   $sheet->fromArray($products);

               });
           })->export('xls');

    }

    public function exportInvoicesD(Client $client)
    {


           Excel::create('Pedidos entregados'.$client->name, function($excel) use($client)  {

               $excel->sheet('Pedidos', function($sheet) use($client) {

                   $products = Invoice::where('client_id', '=', $client->id)->Delivered()->get();

                   $sheet->fromArray($products);

               });
           })->export('xls');

    }

    public function exportInvoicesP(Client $client)
    {

           Excel::create('Pedidos pagados'.$client->name, function($excel) use($client)  {

               $excel->sheet('Pedidos', function($sheet) use($client) {

                   $products = Invoice::where('client_id', '=', $client->id)->Paid()->get();

                   $sheet->fromArray($products);

               });
           })->export('xls');

    }
}
