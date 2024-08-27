@extends('/admin/dashboard')
@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="card rounded-3 shadow-sm">
        <div class="card-body mx-4 my-2">
            <form action="/kegiatan" method="POST" enctype="multipart/form-data">
                <h2 class="font-weight-bold">Atur Kegiatan Website</h2>
                <p>Silahkan isi dengan benar untuk membuat kegiatan website mu!</p>
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Kegiatan</label>
                    <input type="text" id="judul" name="judul_kegiatan" placeholder="Masukkan Judul Kegiatan">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Kegiatan</label>
                    <textarea id="deskripsi" name="deskripsi_kegiatan" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Kegiatan</label>
                    <input type="file" class="form-control-file" id="image" name="gambar_kegiatan" required>
                </div>
                <button type="submit" class="font-weight-bold text-white">Simpan Perubahan</button>
            </form>
=======
    <div class="container">
        <div class="card rounded-3 shadow-sm">
            <div class="card-body mx-4 my-2">
                <form action="/kegiatan" method="POST" enctype="multipart/form-data">
                    <h2>Atur Kegiatan Website</h2>
                    <p>Silahkan isi dengan benar untuk membuat kegiatan website mu!</p>
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Kegiatan</label>
                        <input type="text" id="judul" name="judul_kegiatan" placeholder="Masukkan Judul Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Kegiatan</label>
                        <textarea id="deskripsi" name="deskripsi_kegiatan" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Kegiatan</label>
                        <input type="file" class="form-control-file" id="image" name="gambar_kegiatan" required>
                    </div>
                    <button type="submit">Simpan Perubahan</button>
                </form>
>>>>>>> a3d722ac118b23911edf5465d20a2ff5a6bba801

                <!-- Tabel CRUD untuk menampilkan data kegiatan -->
                <br>
                <h2 class="font-weight-bold">Daftar Kegiatan</h2>
                <table class="table">
                    <thead>
                        <tr>
<<<<<<< HEAD
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kegiatan->judul_kegiatan }}</td>
                            <td>{{ $kegiatan->deskripsi_kegiatan }}</td>
                            <td><img src='storage/kegiatan/{{ $kegiatan->gambar_kegiatan }}' alt="{{ $kegiatan->judul_kegiatan }}"
                                    width="100"></td>
                            <td>
                                <!-- Tambahkan tombol edit dan delete -->
                                <a href="/kegiatan/edit/{{ $kegiatan->id }}" class="btn btn-success mb-3">Edit</a>
                                <a href="/kegiatan/delete/{{ $kegiatan->id }}" class="btn btn-danger">Delete</a>
                            </td>
=======
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                            <th>Active</th>
>>>>>>> a3d722ac118b23911edf5465d20a2ff5a6bba801
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatans as $kegiatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kegiatan->judul_kegiatan }}</td>
                                <td>{{ $kegiatan->deskripsi_kegiatan }}</td>
                                <td><img src='storage/kegiatan/{{ $kegiatan->gambar_kegiatan }}'
                                        alt="{{ $kegiatan->judul_kegiatan }}" width="100"></td>
                                <td>
                                    <!-- Tambahkan tombol edit dan delete -->
                                    <a href="/kegiatan/edit/{{ $kegiatan->id }}" class="btn btn-success">Edit</a>
                                    <a href="/kegiatan/delete/{{ $kegiatan->id }}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="{{ $kegiatan->id }}"
                                            {{ $kegiatan->active ? 'checked' : '' }}>
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

    <script>
        document.querySelectorAll('.switch input').forEach(function(toggleSwitch) {
            toggleSwitch.addEventListener('change', function() {
                let kegiatanId = this.getAttribute('data-id');
                let activeStatus = this.checked ? 1 : 0;

                fetch(`/kegiatan/toggle/${kegiatanId}`, {
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
