<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

use App\Invoice;
use App\Client;
use App\InvoiceItem;

class DashboardController extends Controller
{
    public function index()
    {

      $invoices = Invoice::where('finished', '=', 1)->get();
      $invoicesd = Invoice::where('delivered', '=', 1)->get();
      $invoicesp = Invoice::where('paid', '=', 1)->get();
      $clients = Client::all();

      return view('backend.views.dashboard.index', compact('invoices', 'clients', 'invoicesd', 'invoicesp'));
    }


}
