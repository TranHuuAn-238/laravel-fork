<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Radio;

class RadioComposer
{

    /**
     * Create a new radio composer.
     *
     * @return  void
     */
    public function __construct()
    {
        //
    }

    /**
     * Bind data to the view.
     *
     * @param    View  $view
     * @return  void
     */
    public function compose(View $view)
    {
        $radio = Radio::where('status', 1)->orderBy('id', 'desc')->first();

        $view->with('radio', $radio);
    }
}