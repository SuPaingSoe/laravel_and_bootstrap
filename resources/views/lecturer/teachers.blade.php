<x-layout>
    <x-slot name="title">
      <title>MBA Teacher List</title>
    </x-slot>
    <x-slot name="content">
      <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Lecturer Details</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
    <thead>
      <tr>
        <th valign="middle" scope="col">Lecturer Name</th>
        <th valign="middle" scope="col">Lecturer Photo</th>
        <th valign="middle" scope="col">Profile</th>
        <th valign="middle" scope="col">Join Date</th>
      </tr>
    </thead>

    <tbody>
    @foreach($teachers as $teacher)
    @if($teacher->status =='0')
      <tr>
        <td valign="middle">{{$teacher->teacher_name}}</td>
        <td><img class="rounded-circle shadow-1-strong me-2" src="/storage/{{$teacher->lecturer_photo}}" width="100" height="100"/></td>
        <td valign="middle">{{$teacher->profile}} </td>
        <td valign="middle">{{$teacher->join_date}} </td>
      </tr>
    @endif
    @endforeach
    </tbody>
</table>

<table style="width:100%;" align="center" border="0px">
<tr>
      <td align="center">{{$teachers->links()}}</td>
      <td align="center"><td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
</tr>
</table>
</div>

</x-slot>
</x-layout>