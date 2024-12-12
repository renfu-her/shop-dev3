<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'email',
        'message',
        'is_read',
        'is_replied',
    ];

    public function getIsReadAttribute()
    {
        return $this->is_read ? '已讀' : '未讀';
    }

    public function getIsRepliedAttribute()
    {
        return $this->is_replied ? '已回覆' : '未回覆';
    }
}
