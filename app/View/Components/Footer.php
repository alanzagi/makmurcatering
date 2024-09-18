<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $activePage;

    public function __construct($activePage)
    {
        $this->activePage = $activePage;
    }

    public function isActive($page)
    {
        return $this->activePage === $page ? 'text-yellow-400' : 'text-white';
    }

    public function render()
    {
        return view('components.footer');
    }
}
