<?php
/**
 * @Author: Hamilton
 * Controller to process for Multil languages page
 */
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Languages;

class MultiLanguageController extends Controller
{
    /**
     * Responds to requests to GET /
     */
    public $title = "Languages";
    public $theme = 'admin';
    public function Index()
    {
        return $this->view('languages.index', ['languages' => Languages::all() ]);
    }
    /**
     * Responds to requests to GET /add
     */
    public function Add()
    {
        return view('webmaster/languages/add', ['languages' => Languages::all() ]);
    }
    /**
     * Responds to requests to GET /edit
     */
    public function Edit($id=0)
    {
        return view('webmaster/languages/edit', ['languages' => Languages::all() ]);
    }
}