<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Product;
use App\Models\Advert;
use App\Models\HomeAd;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {

        return view('frontend.home',);
    }

    public function memberAgreement()
    {
        return view('frontend.member.agreement');
    }
}
