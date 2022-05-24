<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function remove_invoice(Request $request) {
        $invoice = Invoice::find($request->input('invoice'))->delete();
        return redirect()->back()->with('success','Invoice removed successfully');
    }
}
