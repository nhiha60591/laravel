<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public $title = "Trang chủ";
    public $theme = "admin";
    public function Index()
    {
        return $this->view();
    }
}
