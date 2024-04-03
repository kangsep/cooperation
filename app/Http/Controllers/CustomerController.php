<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        echo "Asep Salas";
    }

    public function getCity($city) {
        echo "Kota saya di  " . $city;
    }

    public function getStudent($name,$code) {
        echo "Nama saya " . $name. " NRP " . $code;
    }
}
