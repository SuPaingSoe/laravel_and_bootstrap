<x-layout>
    <x-slot name="title">
    <title>Login</title>
    </x-slot>
    <x-slot name="content">
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center">Login</h3>
    <div class="card p-4 my-3 shadow-sm">
            <form method="POST" enctype="multipart/form-data" action="/login">
                @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{old('email')}}">
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
</div>
</x-slot>
</x-layout>