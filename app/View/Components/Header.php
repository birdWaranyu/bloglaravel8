<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        //
//    }

    public $title;
    // $data ตัวแปรนี้ เอาไว้เก็บค่าของ $title ไว้เพื่อ เรียก x-header data="" ของข้อมูลออกมา
    public function __construct($data)
    {
        $this->title = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
