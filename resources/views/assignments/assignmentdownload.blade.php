<x-layout>
    <x-slot name="title">
    <title>MBA Assignment Download</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <section class="container text-center" id="blogs">
    <p align="left" class="text-primary"><strong>Assignments Details</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <div style="font-size: 11pt; font-family: symbol;">
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
  <thead>
    <tr>
      <th scope="col">Batch No</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Assignment Name</th>
      <th scope="col">Deadline</th>
      <th scope="col">Lecturer Name</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($assignments as $assignment)
    <tr>
      <td>{{$assignment->batch_id}}</td>
      <td>{{$assignment->subject_name}}</td>
      <td>{{$assignment->student_id}}</td>
      <td><a href="/assignmentdownloadfile/{{$assignment->assignment_name}}">{{$assignment->assignment_name}}<a></td>
      <td>{{$assignment->deadline}}</td>
      <td>{{$assignment->teacher_name}}</td> 
      <td><a href="/admin/{{$assignment->id}}/assignment/edit" class="btn btn-sm btn-success">Edit</a></td>
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
</div>

<a href="/assignments" style="font-size: 11pt; font-family: symbol;">Back</a>
</section>
    </x-slot>
</x-layout>