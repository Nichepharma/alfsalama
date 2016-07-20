<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DatalinkController extends Controller {
  public function index()
  {
      $action = Input::get('action');
      $code = Input::get('code');
      $data = json_decode(Input::get('data'));
      return $data->name;
  }
}
