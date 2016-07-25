<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App;

class CPanelController extends Controller {
  public function index()
  {
      return view('cp.index');
  }
}
