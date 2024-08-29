@extends('/admin/dashboard')
@section('title', 'Kelola Informasi / Berita') <!-- Menambahkan judul halaman -->
@section('content')
    <div class="container">
        <div class="card rounded-3 shadow-sm">
            <div class="card-body mx-4 my-2">
                <form action="/berita" method="POST" enctype="multipart/form-data">
                    <h2 class="font-weight-bold">Atur Berita Website</h2>
                    <p>Silahkan isi dengan benar untuk membuat Berita Websitemu!</p>
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Berita</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Berita</label>
                        <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Berita</label>
                        <input type="file" class="form-control-file" id="image_berita" name="image_berita" required>
                    </div>
                    <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
                </form>
                <br>
                <h2 class="font-weight-bold">Daftar Berita</h2>
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                            <th>Non-Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $berita)
                            <tr>
                                {{-- <td>{{ $berita->id }}</td> --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $berita->title }}</td>
                                <td>{{ $berita->body }}</td>
                                <td><img src='storage/berita/{{ $berita->image_berita }}' alt="{{ $berita->title }}"
                                        width="100"></td>
                                <td>
                                    <a href="/berita/edit/{{ $berita->id }}" class="btn btn-success mb-3" >Edit</a>
                                    <a href="/berita/delete/{{ $berita->id }}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="{{ $berita->id }}"
                                            {{ $berita->active ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script untuk menangani perubahan status toggle switch -->
    <script>
        document.querySelectorAll('.switch input').forEach(function(toggleSwitch) {
            toggleSwitch.addEventListener('change', function() {
                let beritaId = this.getAttribute('data-id');
                let activeStatus = this.checked ? 1 : 0;

                fetch(`/berita/toggle/${beritaId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        active: activeStatus
                    })
                }).then(response => {
                    if (response.ok) {
                        console.log('Status berhasil diperbarui');
                    } else {
                        console.error('Gagal memperbarui status');
                    }
                });
            });
        });
    </script>
@endsection
