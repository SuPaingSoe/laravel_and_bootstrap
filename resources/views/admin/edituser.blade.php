<x-layout>
    <x-slot name="title">
    <title><span style="font-size: 11pt; font-family: symbol;">User Edit Form</span></title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 10pt; font-family: symbol;">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">User Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$user->id}}/user/update">
                @method('patch')
                @csrf
            <div class="mb-3">
                <label for="userid" class="form-label">User ID</label>
                <input type="text" name="userid" class="form-control" id="userid" style="font-size: 11pt; font-family: symbol;" value="{{$user->id}}" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" style="font-size: 11pt; font-family: symbol;" value="{{$user->name}}">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="username" style="font-size: 11pt; font-family: symbol;" value="{{$user->user_name}}">
            @error('username')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="text" name="emailaddress" class="form-control" id="emailaddress" style="font-size: 11pt; font-family: symbol;" value="{{$user->email}}">
            @error('emailaddress')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>