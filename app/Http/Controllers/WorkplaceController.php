<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkplaceController extends Controller
{
    public function index() {
        $workspace = Workspace::find(1);
        dump($workspace->location_id);
    }
}
