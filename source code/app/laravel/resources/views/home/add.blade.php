@extends('layout.app')

@section('title','Add User')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processAddUser') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h1 class="mb-3 text-center">Add User</h1>

                @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Oops!</b> {{ session('error') }}
                    </div>
                @endif

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="email" id="email" name="email" required>
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" required>
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
                    <label for="floatingInput">Password</label>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" id="file" name="file" required>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection