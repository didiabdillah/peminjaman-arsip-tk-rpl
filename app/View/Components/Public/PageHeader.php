<?php

namespace App\View\Components\Public;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;
    public array $breadcrumb;

    public function __construct(string $title = 'Page Title', array $breadcrumb = [])
    {
        $this->title = $title;
        $this->breadcrumb = $breadcrumb;
    }

    public function render()
    {
        return view('layouts.public.partials.page-header');
    }
}
