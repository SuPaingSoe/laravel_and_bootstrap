<x-layout>
    <x-slot name="title">
    <title>MBA Batch List</title>
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
    <p align="left" class="text-primary"><strong>Batch List</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <div>
    <table class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
  <thead>
    <tr>
      <th scope="col">Batch ID</th>
      <th scope="col">Open Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Exam Date</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($batches as $batch)
    <tr>
      <td><a href="/batches/{{$batch->id}}">{{$batch->id}}</a></td>
      <td>{{$batch->open_date}}</td>
      <td>{{$batch->duration}}</td>
      <td>{{$batch->exam_date}}</td>
      <td><a href="/admin/{{$batch->id}}/batch/edit" class="btn btn-sm btn-success">Edit</a></td>
       <!-- <td>
           <form action="/" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-primary btn btn-sm">Delete</button>
           </form>
        </td> -->
    </tr>
  @endforeach
  </tbody>
</table>
<div style="font-size: 11pt; font-family: symbol;">
<table style="width:100%;" align="center" border="0px">
<tr>
      <td align="center">{{$batches->links()}}</td>
      <td align="center"><a href="/post_login">Home Page</a></td>
</tr>
</table>
</div>
</div>
</div>
</x-slot>
</x-layout>