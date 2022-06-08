<x-layout>
    <x-slot name="title">
    <title>MBA Subject Detail</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>

    <div>
      <p>
          
      </p>
    </div>
    <div>
      <p>

      </p>
    </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Subjects List</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <table class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
  <thead>
    <tr>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Book Name</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($subjects as $subject)
    <tr>
      <td>{{$subject->id}}</td>
      <td>{{$subject->descriptions}}</td>
      <td>{{$subject->book_name}}</td>
      <td><a href="/admin/{{$subject->id}}/subject/edit" class="btn btn-sm btn-success">Edit</a></td>
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
<div style="font-size: 10pt; font-family: symbol;">
<table style="width:100%;" align="center" border="0px">
<tr>
      <td align="center">{{$subjects->links()}}</td>
      <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
</tr>
</table>
</div>
</div>

    </x-slot>
</x-layout>