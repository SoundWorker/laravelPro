<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Option;

class CommonComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $contactEmail = Option::where('slug','contactEmail')->first()->value;
        $contactAddress = Option::where('slug','contactAddress')->first()->value;
        $contactPhone = Option::where('slug','contactPhone')->first()->value;
        $view->with( compact('catsTop','path','contactEmail', 'contactAddress', 'contactPhone'));
    }


}