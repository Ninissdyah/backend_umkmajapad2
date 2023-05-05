<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class StoreAdminController extends Controller
{
    public function index()
    {
        $data = array(
            'id' => "vendors",
            'vendors' => Vendor::orderBy('updated_at', 'asc')->paginate(5)
        );
        $no = 1;
        return view('admins.store', compact('no'))->with($data);
    }
}
