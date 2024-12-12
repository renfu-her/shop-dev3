@extends('frontend.layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">問題回饋</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">電子郵件</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">訊息內容</label>
                                <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">送出訊息</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('ckeditor5/ckeditor5.css') }}">
@endpush

@include('admin.partials.ckeditor')
