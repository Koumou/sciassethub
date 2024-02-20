<?php

namespace App\Http\Controllers;

use App\Models\Research_project;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Throwable;
use Mpdf\Tag\Th;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categoty()
    {
        return view('staff.folder');
    }
    public function add_request__list_asset()
    {
        return view('staff.add_request__list_asset');
    }
    public function add_request__list_chemical()
    {
        return view('staff.add_request__list_chemical');
    }

    public function form_add_equipment()
    {
        return view('staff.form_add_equipment');
    }

    public function form_add_chemical()
    {
        return view('staff.form_add_chemical');
    }

    public function form_add_space_rent()
    {
        return view('staff.form_add_space_rent');
    }
    public function view_space_requested_()
    {
        return view('staff.view_space_requested');
    }

}
