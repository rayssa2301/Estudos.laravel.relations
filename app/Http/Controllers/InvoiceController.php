<?php

namespace App\Http\Controllers;


use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index()
    {
        $invoice =  Invoice::all();
        return $invoice;
    }

    public function createInvoices(Request $r)
    {
        $invoice = new Invoice();
        $invoice->description = $r->description;
        $invoice->value = $r->value;
        $invoice->user_id = $r->user_id;
        $invoice->address_id = $r->address_id;
        $invoice->save();

        return $invoice;
    }

    public function findOne(Request $r)
    {
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
