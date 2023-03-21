<?php

namespace App\Http\Controllers;

use App\Models\DeviceType;
use Illuminate\Http\Request;

class DeviceTypeController extends Controller
{
    public function index() {
        $device_type = DeviceType::find(1);
        dump($device_type->name);
    }
}
