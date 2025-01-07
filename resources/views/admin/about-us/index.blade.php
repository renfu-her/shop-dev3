@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">關於我們管理</h3>
                        @if (!$aboutUs)
                            <div class="card-tools">
                                <a href="{{ route('admin.about-us.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> 新增
                                </a>
                            </div>
                        @endif
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-body">
                        @if ($aboutUs)
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="200">標題</th>
                                        <td>{{ $aboutUs->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>圖片</th>
                                        <td>
                                            <img src="{{ asset('storage/about-us/' . $aboutUs->image) }}" alt="關於我們圖片"
                                                style="max-width: 200px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>內容</th>
                                        <td>{!! Str::markdown($aboutUs->content) !!}</td>
                                    </tr>
                                    <tr>
                                        <th>操作</th>
                                        <td>
                                            <a href="{{ route('admin.about-us.edit', $aboutUs->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> 編輯
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @else
                            <p class="text-center">尚未建立關於我們的內容</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .table td {
            vertical-align: middle;
        }
    </style>
@endpush
