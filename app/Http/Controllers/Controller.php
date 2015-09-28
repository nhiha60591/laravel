<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Theme;

abstract class Controller extends BaseController
{
    public $theme = 'default';
    public $layout = 'default';
    public $title = "Laravel 5";
    public $keywords = '';
    public $description = '';
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function view($template = 'home.index', $view = array()){
        $assetUrl = config('theme.assetUrl');
        $theme = Theme::uses($this->theme)->layout($this->layout);

        $theme->setTitle($this->title);
        $theme->setKeywords($this->keywords);
        $theme->setDescription($this->description);
        $default = array(
            'home_url' => $assetUrl
        );
        $args = array_merge($default, $view);
        return $theme->scope($template, $args)->render();
    }
}
