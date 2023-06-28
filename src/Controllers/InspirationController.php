<?php
namespace Ghusr\Inspire\Controllers;

use Illuminate\Http\Request;
use Ghusr\Inspire\Inspire;

class InspirationController
{
    public function  __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        //return $quote;
        return view('inspire::index', compact('quote'));
    }
}