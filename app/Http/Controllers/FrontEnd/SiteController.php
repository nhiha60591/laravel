<?php

namespace App\Http\Controllers\FrontEnd;
use DB;
use App;
use Lang;
use App\Http\Controllers\Controller;
use Theme;
use App\Models\Article;

class SiteController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public $title = "Trang chủ";
    public function getIndex()
    {        
        return $this->view();
    }
}
