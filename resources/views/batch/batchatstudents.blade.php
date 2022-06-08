<x-layout>
    <x-slot name="title">
      <div class="mt-2">
    <title>MBA Batch Student Detail</title>
    </div>
    </x-slot>
    <x-slot name="content">

    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>

    <section class="container text-center" id="blogs">
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Batch Student Details</strong><p>
    <div style="font-size: 11pt; font-family: symbol;">
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/>
    </div>
    <br/>
    <table id="myTable" class="table table-striped js-sort-table" align="center" border="1px">
  <thead>
    <tr>
      <th scope="col">Batch ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Student Photo</th>
      <!-- <th scope="col" colspan="2">Action</th> -->
    </tr>
  </thead>

  <tbody>
  @foreach($batches as $batch)
    <tr>
      <td valign="middle">{{$batch->batch_id}}</td>
      <td valign="middle">{{$batch->id}}</td>
      <td valign="middle">{{$batch->student_name}}</td>
      <td valign="middle">{{$batch->organization_name}}</td>
      <td><img class="rounded-circle shadow-1-strong me-2" src="/storage/{{$batch->student_photo}}" width="100" height="100"/></td>
      <!-- <td valign="middle"><a href="/admin/{{$batch->id}}/student/edit" class="btn btn-sm btn-success">Edit</a></td>
      <td valign="middle">
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
      <td align="center"><a href="/batches">Batches</a></td>
</tr>
</table>
</div>
</div>
</div>
</section>
    <!-- <a href="/batches" style="font-size: 11pt; font-family: symbol;">Batches</a> -->
    </x-slot>
</x-layout>