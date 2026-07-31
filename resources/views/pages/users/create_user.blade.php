@extends('layouts.users.template')

@section('title', 'Add User')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container mt-3">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <h3 class="text-center h3 my-2">Add User</h3>
                <a href="{{ route('users.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square-fill mx-1"></i>Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" class=" " id="userForm"  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="from-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                        <input type="file" name="profile" id="profile" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for=""> Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
        
    </div>

    @endsection

    @section('script')

        <script>
            // You can add JavaScript code here if needed
            const form = document.getElementById('userForm');
            const formData = new FormData(form);

            try{
                const response = await fetch('{{ route('users.store') }}',{
                    method: "POST",
                    body: formData,
                }'}')
            }

        </script>

    @endsection