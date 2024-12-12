<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    public function index()
    {
        return view('frontend.feedback.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Feedback::create($request->all());
        return redirect()->back()->with('success', '留言成功');
    }
}
