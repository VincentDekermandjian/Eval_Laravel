<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View extends Controller
{
  public function home()
  {
      return view('welcome');
  }
  public function add()
  {
    return view('add');
  }
  public function files()
{
    return view('files');
}


}


// public function contact($name)
// {
//   return view('contact', [
//     "name" => $name,
//       "data" => [
//         "tomate",
//         "pomme",
//         "pain",
//         "lapin"
//       ]
//
//     ]);
// }
