<x-layout>
    <x-slot name="title">
    <title>MBA Papers List</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div>
    </div>

    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Papers List</strong><p>
      <div align="right">
      <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
      </div>
    <div>
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;height:100%;" align="center" border="1px">
    <thead>
      <tr>
        <th scope="col">Batch ID</th>
        <th scope="col">Student ID</th>
        <th scope="col">Student Name</th>
        <th scope="col">Paper Title</th>
        <th scope="col">Download</th>
        <th scope="col">Finished Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach($papers as $paper)
      <tr>
        <td>{{$paper->batch_id}}</a></td>
        <td>{{$paper->student_id}}</td>
        <td>{{$paper->student->student_name}}</td>
        <td>{{$paper->paper_title}}</td>
        <td><a href="/papersdownload/{{$paper->id}}">Download</td>
        <td>{{$paper->finished_date}}</td>
      </tr>
    @endforeach
    </tbody>
    </table>
  <div>
  <table style="width:100%;" align="center" border="0px">
  <tr>
        <td align="center">{{$papers->links()}}</td>
        <td align="center"><a href="/post_login">Home Page</a></td>
  </tr>
  </table>
  </div>
</div>
</div>
    </x-slot>
</x-layout>