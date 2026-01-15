@extends('layouts.admin')

@section('title', 'Daftar Pengguna')

@section('content')
    <!-- Tabel Daftar Pengguna -->
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Daftar Pengguna</h3>

            <div class="d-flex align-items-center">
                <!-- Form Pencarian -->
                <form class="position-relative table-src-form me-3">
                    <input type="text" class="form-control" placeholder="Cari pengguna" />
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                </form>

                <!-- Tombol Tambah Pengguna Baru -->
                <a href="{{ route('admin.users.create') }}"
                    class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                        <span>Tambah Pengguna Baru</span>
                    </span>
                </a>
            </div>
        </div>

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID Pengguna</th>
                                <th scope="col">Pengguna</th>
                                <th scope="col">Email</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Proyek</th>
                                <th scope="col">Tanggal Bergabung</th>
                                <th scope="col" class="text-center">Aksi</th> <!-- Align Aksi ke tengah -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-body">{{ '#' . $user->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('path-to-image/' . $user->image) }}" class="wh-40 rounded-3"
                                                alt="user">
                                            <div class="ms-2 ps-1">
                                                <h6 class="fw-medium fs-14 mb-0">{{ $user->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->location ?? 'N/A' }}</td>
                                    <td>{{ $user->phone ?? 'N/A' }}</td>
                                    <td>{{ $user->projects_count ?? 0 }}</td>
                                    <td>{{ $user->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.users.show', $user->id) }}"
                                            class="btn btn-sm btn-info">Lihat</a>
                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div
                    class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                    <span class="fs-13 fw-medium">Items per pages: 10</span>
                    <div class="d-flex align-items-center">
                        <span class="fs-13 fw-medium me-2">{{ $users->firstItem() }} - {{ $users->lastItem() }} of
                            {{ $users->total() }}</span>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                {{ $users->links() }} <!-- Pagination Links -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus pengguna ini? Tindakan ini tidak dapat dibatalkan.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form id="deleteForm" action="" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // Menangani event klik tombol hapus untuk memuat ID pengguna ke dalam form
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Tombol yang diklik
            var userId = button.getAttribute('data-user-id'); // Ambil ID pengguna
            var formAction = '/admin/users/' + userId; // Tentukan URL untuk form hapus

            // Set action form dengan URL hapus yang benar
            document.getElementById('deleteForm').action = formAction;
        });
    </script>
@endsection
