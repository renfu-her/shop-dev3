<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use App\Services\CaptchaService;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Services\MailService;

class JoinController extends Controller
{
    protected $captchaService;
    protected $mailService;

    public function __construct(
        CaptchaService $captchaService,
        MailService $mailService
    ) {
        $this->captchaService = $captchaService;
        $this->mailService = $mailService;
    }

    public function index()
    {
        return view('frontend.auth.register');
    }

    public function joinProcess(Request $request)
    {

        if (empty($request->name)) {
            return $this->error('名稱不能為空');
        }

        if (empty($request->email)) {
            return $this->error('信箱不能為空');
        }

        if (empty($request->phone)) {
            return $this->error('手機號碼不能為空');
        }

        if (empty($request->password)) {
            return $this->error('密碼不能為空');
        }

        if ($request->password !== $request->password_confirmation) {
            return $this->error('密碼與確認密碼不一致');
        }

        // 驗證驗證碼
        if (!$this->captchaService->validate($request->captcha)) {
            return $this->error('驗證碼不正確');
        }

        $member = Member::where('email', $request->email)->first();
        if ($member) {
            return $this->error('此信箱已經註冊過');
        }

        if (!$request->agree) {
            return $this->error('請同意會員條款');
        }


        // 創建會員
        $member = Member::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
            'agree' => $request->agree == 'on' ? 1 : 0,
            'status' => 1,
            'email_verified_at' => now(),
        ]);

        // 發送歡迎郵件 - 使用通用方法
        // $this->mailService->send(
        //     $member->email,
        //     '歡迎加入會員',
        //     [
        //         'title' => '歡迎加入',
        //         'content' => "親愛的 {$member->name} 您好，\n\n感謝您加入我們的會員...",
        //         'button' => [
        //             'text' => '購物網站，您可以開始購物了！',
        //             'url' => route('home')
        //         ]
        //     ],
        //     'emails.content',
        //     ['member' => $member]
        // );

        return $this->success('註冊成功！歡迎加入我們', 'home');
    }

    /**
     * 驗證生日
     */
    private function validateBirthday(Request $request)
    {
        if ($request->year || $request->month || $request->day) {
            if (!$request->year || !$request->month || !$request->day) {
                return 'error:如果要填寫生日，請填寫完整的年月日';
            }

            if (!checkdate($request->month, $request->day, $request->year)) {
                return 'error:請輸入有效的出生日期';
            }

            return sprintf('%04d-%02d-%02d', $request->year, $request->month, $request->day);
        }

        return null;
    }
}
