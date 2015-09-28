<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public function Index()
    {
        return $this->view();
    }
}
