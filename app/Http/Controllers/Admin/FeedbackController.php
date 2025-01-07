<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.show', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedbacks.index')->with('success', '反饋已刪除');
    }
}
