<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index() {
        $device = Device::find(1);
        dump($device->model);
        dump($device->specification);
        dump($device->sn);
        dump($device->inventory_number);
        dump($device->install_date);
        dump($device->is_deleted);
    }
}
