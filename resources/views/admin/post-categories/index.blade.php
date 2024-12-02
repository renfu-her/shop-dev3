@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>文章分類管理</h2>
            <a href="{{ route('admin.post-categories.create') }}" class="btn btn-primary">新增分類</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-responsive" id="dataTable">
                    <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>名稱</th>
                            <th>排序</th>
                            <th>狀態</th>
                            <th>創建時間</th>
                            <th style="width: 15%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->sort_order }}</td>
                                <td>
                                    @if($category->is_active)
                                        <span class="badge bg-success">啟用</span>
                                    @else
                                        <span class="badge bg-danger">停用</span>
                                    @endif
                                </td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.post-categories.edit', $category) }}" 
                                           class="btn btn-sm btn-outline-primary">編輯</a>
                                        <form action="{{ route('admin.post-categories.destroy', $category) }}" 
                                              method="POST" 
                                              onsubmit="return confirm('確定要刪除此分類嗎？');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">刪除</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/2.1.8/i18n/zh-HANT.json"
                },
                responsive: true,
                order: [[2, 'asc']],
                columnDefs: [{
                    targets: -1,
                    orderable: false
                }]
            });
        });
    </script>
@endpush 