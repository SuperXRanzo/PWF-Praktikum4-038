<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditButton extends Component
{
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function render(): View|Closure|string
    {
        return view('components.edit-button');
    }
}