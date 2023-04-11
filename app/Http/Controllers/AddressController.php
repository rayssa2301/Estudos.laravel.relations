<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function index(Request $r)
    {
        $addresses = Address::all();
        return response()->json($addresses);
    }

    public function findOne(Request $r)
    {
        $address = Address::find($r->id);
        $address['users'] = $address->users;
        return $address;
    }

    public function insert(Request $r)
    {
        $rawData = $r->only(['address']);
        $address = Address::create($rawData);
        return $address;
    }
}
