    @extends('/admin/dashboard')
    @section('content')
        <form action="/berita" method="POST" enctype="multipart/form-data">
            <h2>Atur Berita Website</h2>
            <p>Silahkan isi dengan benar untuk membuat Berita Website mu!</p>
            @csrf
            <div class="form-group">
                <label for="title">Judul Berita</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar Berita</label>
                <input type="file" class="form-control-file" id="image_berita" name="image_berita" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Berita</label>
                <textarea class="formroens-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h2>Daftar Berita</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $berita)
                <tr>
                    <td>{{ $berita->id }}</td>
                    <td>{{ $berita->title }}</td>
                    <td><img src='storage/berita/{{ $berita->image_berita }}' alt="{{ $berita->title }}" width="100"></td>
                    <td>{{ $berita->body }}</td>
                    <td>
                        <!-- Tambahkan tombol edit dan delete -->
                        <a href="/berita/edit/{{ $berita->id }}" class="btn btn-warning">Edit</a>                         
                        <a href="/berita/delete/{{ $berita->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
