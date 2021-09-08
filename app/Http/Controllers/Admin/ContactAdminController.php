<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\AboutPageRequest;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ContactAdminController extends Controller
{
    public function index()
    {
        $data = DB::table('requests')->paginate(10);;
        return view('admin.contact.index',[
            'requests' => $data
        ]);
    }
}
