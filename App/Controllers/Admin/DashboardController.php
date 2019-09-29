<?php
namespace App\Controllers\Admin;

use App\Core\Request;
use App\Services\View\View;

class DashboardController
{
    public function index(Request $request)
    {
        $data = array();
        View::load_from_base("admin.dashboard", $data,'layout-admin');
    }
}
