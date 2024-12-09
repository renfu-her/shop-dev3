<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Services\MailService;

class ContactController extends Controller
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function index()
    {
        return view('frontend.contact.index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ], [
            'name.required' => '請輸入姓名',
            'email.required' => '請輸入電子郵件',
            'email.email' => '電子郵件格式不正確',
            'message.required' => '請輸入訊息內容',
        ]);

        Contact::create($validated);

        $messageContent = is_string($validated['message']) ? $validated['message'] : '';

        $this->mailService->send(
            'renfu.her@gmail.com',
            '聯絡我們',
            [
                'title' => '聯絡我們',
                'content' => $messageContent,
            ],
            'emails.default',
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'] ?? '',
                'phone' => $validated['phone'] ?? '',
                'content' => $messageContent,
            ]
        );

        return redirect()
            ->route('contact')
            ->with('success', '訊息已成功送出，我們會盡快與您聯繫！');
    }
}
