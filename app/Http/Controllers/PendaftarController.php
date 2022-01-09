<?php

namespace App\Http\Controllers;

use Gate;
use App\Setting;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PendaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $title = 'Dashboard Pendaftar';
        // $settings = Setting::pluck('value', 'key');
        // return view('pendaftar', compact('settings','title'));
        echo $title;
    }
}
