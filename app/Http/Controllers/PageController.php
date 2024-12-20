<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Comment;
use App\Models\Document;
use App\Models\Page;
use App\Models\Partner;
use App\Models\PriceList;
use App\Models\ServiceTail;
use App\Models\TailRating;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = Page::where('slug', '/')->first();
        $partners = Partner::all();
        $clients = Client::all();
        $serviceTail = ServiceTail::all();
        $ratingTail = TailRating::all();
        $comments = Comment::where('isPublished', 1)->take(3)->get();
        return view('pages.home', compact('data', 'partners', 'clients', 'serviceTail', 'comments', 'ratingTail'));
    }

    public function about()
    {
        $data = Page::where('slug', '/about')->first();
        return view('pages.about', compact('data'));
    }

    public function postavka()
    {
        $data = Page::where('slug', '/postavka')->first();
        $priceList = PriceList::where('id', 1)->first();
        return view('pages.postavka', compact('data', 'priceList'));
    }

    public function services()
    {
        $data = Page::where('slug', '/servisnoe-obsluzhivanie')->first();
        return view('pages.services', compact('data'));
    }

    public function transport()
    {
        $data = Page::where('slug', '/transportnye-uslugi')->first();
        return view('pages.services', compact('data'));
    }

    public function documents()
    {
        $data = Page::where('slug', '/documents')->first();
        $documents = Document::all();
        return view('pages.documents', compact('documents', 'data'));
    }

    public function reviews()
    {
        $data = Page::where('slug', '/reviews')->first();
        $comments = Comment::where('isPublished', 1)->get();
        return view('pages.comments', compact('comments', 'data'));
    }

    public function contacts()
    {
        $data = Page::where('slug', '/contacts')->first();
        return view('pages.contacts', compact('data'));
    }
}
