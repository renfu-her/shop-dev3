@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title">反饋詳情</h4>
                            <a href="{{ route('admin.feedbacks.index') }}" class="btn btn-secondary">
                                返回列表
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">姓名</label>
                                    <p class="form-control-static">{{ $feedback->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">電子郵件</label>
                                    <p class="form-control-static">{{ $feedback->email }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">訊息內容</label>
                            <div class="border rounded p-3 bg-light">
                                {!! nl2br(e($feedback->message)) !!}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">建立時間</label>
                            <p class="form-control-static">{{ $feedback->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>

                        <div class="mt-4">
                            <form action="{{ route('admin.feedbacks.destroy', $feedback) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('確定要刪除嗎？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">刪除</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
