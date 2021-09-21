<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119114,
        'name' => 'Muchamad Wahyu Aji Nagari',
        'gender' => 'Pria',
        'phone' => '08584640301',
        'class' => 'XII RPL 4'];
  }
}