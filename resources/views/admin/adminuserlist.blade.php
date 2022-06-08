<x-layout>
    <x-slot name="title">
      <div class="mt-2">
    <title>IMCM MBA Users List</title>
    </div>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
      <p align="left" class="text-primary"><strong>Users Details</strong><p>
      <div align="right">
      <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
      </div>
      <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Email Address</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
        @if($user->user_status=='0')
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->user_name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="/admin/{{$user->id}}/user/edit" class="btn btn-sm btn-success">Edit</a></td>
            <td>
            <form action="/admin/{{$user->id}}/delete" method="POST">
                @csrf
                    <button type="submit" class="btn btn-primary btn btn-sm">Delete</button>
            </form>
     
            </td>
          </tr>
        @endif
        @endforeach
        </tbody>
    </table>
    <table style="width:100%;" align="center" border="0px">
      <tr>
            <td align="center">{{$users->links()}}</td>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
      </tr>
    </table>

  </div>

</x-slot>
</x-layout>