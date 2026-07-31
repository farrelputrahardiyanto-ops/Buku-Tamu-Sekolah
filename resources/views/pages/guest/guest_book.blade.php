@extends('layouts.users.template')

@section('title', 'Buku Tamu')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header border-0 ">
                        <h1 class="text-center h2">Buku Tamu</h1>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone">No. Telepon</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="comment">Komentar</label>
                                <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="visit_date">Tanggal Berkunjung</label>
                                <input type="date" name="visit_date" id="visit_date" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="img">Foto (opsional)</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection