<?php
namespace App\Http\Controllers\Frontpages;

use App\Models\User;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class FrontendpagesController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.pages.index');
    }

    public function test(Request $request)
    {
        return back()->withInput();
    }

    public function form(Request $request)
    {
        return view("form");
    }

    public function contacts(Request $request)
    {
        return view('frontend.pages.contact');
    }

    public function affiliate(Request $request)
    {
        return view('frontend.pages.affiliate');
    }

    public function privacy(Request $request)
    {
        return view('frontend.pages.privacy');
    }

    public function termsofservice(Request $request)
    {
        return view('frontend.pages.termsofservice');
    }

    public function licenses(Request $request)
    {
        return view('frontend.pages.licenses');
    }

    public function feedback(Request $request)
    {
        return view('frontend.pages.feedback');
    }

    public function team(Request $request)
    {
        return view('frontend.pages.team');
    }

    public function advisors(Request $request)
    {
        return view('frontend.pages.advisors');
    }

    public function investors(Request $request)
    {
        return view('frontend.pages.investors');
    }

    public function careers(Request $request)
    {
        return view('frontend.pages.careers');
    }

    public function institutions(Request $request)
    {
        return view('frontend.pages.institutions');
    }

    public function fees(Request $request)
    {
        return view('frontend.pages.fees');
    }

    public function news(Request $request)
    {
        return view('frontend.pages.news');
    }

    public function faq(Request $request)
    {
        return view('frontend.pages.faq');
    }

    public function resource_center(Request $request)
    {
        return view('frontend.pages.resource-center');
    }

    public function blog(Request $request)
    {
        return view('frontend.pages.blog');
    }

    public function refer_a_friend(Request $request)
    {
        return view('frontend.pages.refer-a-friend');
    }

    public function prohibiteduses(Request $request)
    {
        return view('frontend.pages.prohibited-uses');
    }

    public function products(Request $request)
    {
        return view('frontend.pages.products');
    }

    public function interestaccount(Request $request)
    {
        return view('frontend.pages.interest-account');
    }

    public function trading(Request $request)
    {
        return view('frontend.pages.trading');
    }

    public function rates(Request $request)
    {
        return view('frontend.pages.rates');
    }

    public function cryptointerestaccount(Request $request)
    {
        return view('frontend.pages.crypto-interest-account');
    }

    public function cryptoloans_frontpage(Request $request)
    {
        return view('frontend.pages.crypto-loans');
    }

    public function earncrypto(Request $request)
    {
        return view('frontend.pages.earncrypto');
    }

    public function howtogetabitcoinloan(Request $request)
    {
        return view('frontend.pages.how-to-get-a-bitcoin-loan');
    }

    public function earnbitcoininterest(Request $request)
    {
        return view('frontend.pages.earn-bitcoin-interest');
    }

    public function homeloans(Request $request)
    {
        return view('frontend.pages.home-loans');
    }

    public function refinancedebt(Request $request)
    {
        return view('frontend.pages.refinance-debt');
    }

    public function fundcryptomining(Request $request)
    {
        return view('frontend.pages.fund-crypto-mining');
    }

    public function autoloan(Request $request)
    {
        return view('frontend.pages.auto-loan');
    }
}
