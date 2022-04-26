@extends('layout.app')

@section('title','Edit User')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditUser') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h1 class="mb-3 text-center">Edit Gallery</h1>
                <input type="hidden" id="id" name="id" value="{{$user->id}}">

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" placeholder="email" id="email" name="email" value="{{ $user->email }}" required>
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="name" id="name" name="name" value="{{ $user->name }}" required>
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="password" id="password" name="password">
                    <label for="floatingInput">Password</label>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" id="file" name="file">
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection