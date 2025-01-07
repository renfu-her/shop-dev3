@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">反饋管理</h3>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="80">ID</th>
                                        <th width="150">姓名</th>
                                        <th width="200">電子郵件</th>
                                        <th>訊息預覽</th>
                                        <th width="150">建立時間</th>
                                        <th width="150">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $feedback->id }}</td>
                                            <td>{{ $feedback->name }}</td>
                                            <td>{{ $feedback->email }}</td>
                                            <td>{{ Str::limit($feedback->message, 50) }}</td>
                                            <td>{{ $feedback->created_at->format('Y-m-d H:i') }}</td>
                                            <td>
                                                <a href="{{ route('admin.feedbacks.show', $feedback) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-eye"></i> 查看
                                                </a>
                                                <form action="{{ route('admin.feedbacks.destroy', $feedback) }}"
                                                    method="POST" class="d-inline" onsubmit="return confirm('確定要刪除嗎？');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> 刪除
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $feedbacks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            const table = $('#dataTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/2.1.8/i18n/zh-HANT.json"
                },
                responsive: true,
                ordering: false,
            });
        });
    </script>
@endpush
