<x-layout>
    <x-slot name="title">
    <title>MBA Batch Subjects Teachers Detail</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Batch Subjects Lecturers Details</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <div>
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
    <thead>
      <tr>
        <th scope="col">Batch ID</th>
        <th scope="col">Subject ID</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Lecturer Name</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
      <tr>
        <td>{{$row->batch_id}}</td>
        <td>{{$row->sub_id}}</td>
        <td>{{$row->descriptions}}</td>
        <td>{{$row->teacher_name}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
  </div>
  <table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
</table>

    </x-slot>
</x-layout>