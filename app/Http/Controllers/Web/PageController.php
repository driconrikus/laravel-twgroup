<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Publication;

class PageController extends Controller
{
    public function blog()
    {
        $publications = Publication::orderBy('id', 'DESC')->paginate(5);

        return view('web.publications', compact('publications'));
    }

    public function publication($slug)
    {
        $publication = Publication::where('slug', $slug)->first();

        return view('web.publication', compact('publication'));
    }
}
