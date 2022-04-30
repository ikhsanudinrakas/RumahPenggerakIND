<?php

namespace App\View\Components;

use App\Models\Pengaturan;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $pengaturan = Pengaturan::first();
        return view('user.layouts.partials.footer',[
            'pengaturan' => $pengaturan
        ]);
    }
}
