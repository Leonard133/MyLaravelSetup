<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class subheader extends Component
{
    public $title;
    public $breadcrumb;

    public function __construct($title, $breadcrumb = null)
    {
        $this->title = $title;
        if(isset($breadcrumb))
            $this->getBreadcrumb($breadcrumb);
    }

    public function render()
    {
        return view('components.subheader');
    }

    function getBreadcrumb($route)
    {
        $breadcrumb = '';
        $route = explode('|', $route);
        $type = explode(',', $route[0]) ?? '';
        $routeAction = explode(',', $route[1]) ?? null;
        $titles = (isset($route[2])) ? explode(',', $route[2]) : [];
        $last = array_key_last($routeAction);
        $lookup = [
            'index' => 'list',
            'create' => 'create',
            'edit' => 'edit'
        ];
        foreach ($routeAction as $key => $route) {
            if(count($titles) > 0)
            {
                if ($key === $last || empty($titles[$key]))
                    $breadcrumb .= '<li class="breadcrumb-item">'.Str::title(str_replace('_', ' ',$titles[$key])).'</li>';
                else
                    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . route($type[0] . '.' .$type[1] . '.' . $route) . '" class="text-muted">'.Str::title(str_replace('_', ' ',$titles[$key])).'</a></li>';
            } else {
                if ($key === $last)
                    $breadcrumb .= '<li class="breadcrumb-item">'.Str::title($type[1] . ' ' . $lookup[$route]).'</li>';
                else
                    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . route($type[0] . '.' . $type[1] . '.' . $route) . '" class="text-muted">'.Str::title($type[1] . ' ' . $lookup[$route]).'</a></li>';
            }
        }
        $this->breadcrumb = $breadcrumb;
    }
}
