<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Scotthummel\Mailers\ContactMailer;
use App\Scotthummel\Notifications\Flash;
use App\Models\Website;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function scott()
    {
        return view('home.scott');
    }

    public function portfolio()
    {
        $sites = Website::all();

        return view('home.portfolio', [
            'sites' => $sites
        ]);
    }

    public function website($slug)
    {
        $site = Website::where('slug', $slug)->firstOrFail();

        return view('home.website', [
            'site' => $site
        ]);
    }

    public function resume()
    {
        return view('home.resume');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }

    public function news()
    {
        $articles = Article::where('active', 1)->latest()->get();

        return view('home.news', [
            'articles' => $articles
        ]);
    }

    public function getContact()
    {
        return view('home.contact');
    }

    public function postContact(Request $request, ContactMailer $mailer)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required',
            'my_name'   => 'honeypot',
            'my_time'   => 'required|honeytime:5'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }

        $mailer->contact($request->only(['name', 'email', 'phone', 'comments']));

        Flash::success('Thank you for contacting Piscean Digital.  We will return your email in 2-3 business days.');

        return redirect()->to('/');
    }
}
