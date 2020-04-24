<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome Bitches';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Advertising', 'eBay Listings', 'WordPress', 'Custom Development'],
        );
        return view('pages.services')->with($data);
    }
}
