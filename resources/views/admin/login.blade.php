@extends('layouts.header')

@section ('fill')
<div class="container ">
    <div class="card mx-auto col-6 mt-5">
        <div class=" card-body ">
            <h3 class="card-title">Halaman Khusus Admin</h3>
            <h6 class="card-subtitle mb-4  text-muted">Login menggunakan akun admin</h6>

            <div class="mb-3">
                <label for="username" class="form-label text-muted "> Username </label>
                <input type="text" class="form-control" id="username" name="lokasi">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-muted">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>

        </div>
    </div>
</div>

@endsection