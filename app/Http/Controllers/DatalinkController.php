<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App;

class DatalinkController extends Controller {
  public function index()
  {
      $action = Input::get('action');
      $data = json_decode(Input::get('data'));

      switch ($action) {
        case "get_countries":
          $countries = App\Country::all();
          return $countries;

        case "get_cities":
          $cities = App\Country::find($data->country_id)->cities;
          return $cities;

        case "get_specs":
          $specs = App\Spec::all();
          return $specs;

        case "check_email":
          $user = App\User::where('email', $data->email)->get();
          return count($user);

        case "put_patient":
          $user = App\User::create([
            'name'       => $data->name,
            'email'      => $data->email,
            'password'   => $data->password,
            'role_id'    => 2,
            'country_id' => $data->country_id,
            'city_id'    => $data->city_id,
            'address'    => $data->address,
            'contact'    => $data->contact
          ]);

          $patient = new App\Patient;
            $patient->user_id = $user->id;
          $patient->save();
          return 'Done';

        case "put_doctor":
          $user = App\User::create([
            'name'       => $data->name,
            'email'      => $data->email,
            'password'   => $data->password,
            'role_id'    => 2,
            'country_id' => $data->country_id,
            'city_id'    => $data->city_id,
            'address'    => $data->address,
            'contact'    => $data->contact
          ]);
          $doctor = new App\Doctor;
            $doctor->user_id = $user->id;
            $doctor->spec_id = $data->spec_id;
          $doctor->save();
          return 'Done';

        case 'login':
          //$user = App\User::where('')
          return;
      }

  }
}
