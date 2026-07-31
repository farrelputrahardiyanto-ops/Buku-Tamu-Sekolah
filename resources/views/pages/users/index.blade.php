@extends('layouts.users.template')

@section('title', 'Data User')


@section('content')

<div class="container-fluid mt-5">
    <div class="row justify-center">
        <div class="col-md-12">
            <div class="card border-0 shadow sm">
                <div class="card-header border-0">
                    <h3 class="text-center h3 my-2">Data User</h3>
                    <button class="btn btn-primary" id="addUserBtn"><i class="bi bi-person-plus-fill mx-1"></i>Add User</button>
                </div>
                <div class="card-body border-0">
                    <div class="table-responsive">
                         <table class="table table-striped col-auto" id="table">
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    {{-- @vite('resources/js/pages/users/index.js') --}}
    
        <script src="{{ asset('js/pages/users/index.js') }}"></script>
    
@endsection