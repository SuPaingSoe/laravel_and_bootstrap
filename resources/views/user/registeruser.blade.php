<x-layout>
    <x-slot name="title">
    <title>User Registration</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">User Registration</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/registeruserstore">
                @csrf
                <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{old('name')}}">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"
                value="{{old('username')}}">
                @error('username')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
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
            <div class="mb-3">
            <label for="thumbnail" class="form-label">Upload User Photo - </label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-contorl">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
</div>
<table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>

    </x-slot>
</x-layout>