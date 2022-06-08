<x-layout>
    <x-slot name="title">
    <title>Old Questions Edit Form</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div>
    </div>
    <section class="container text-center" id="blogs">
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <p align="left" class="text-primary"><strong>Old Questions List</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/><br/>
    </div>
    <div>
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
  <thead>
    <tr>
      <th scope="col">Batch ID</th>
      <th scope="col">Subject</th>
      <th scope="col">Questions</th>
      <th scope="col">YYYY-MM-DD</th>
    </tr>
  </thead>
  <tbody>
  @foreach($oldquestions as $oldquestion)
    <tr>
      <td>{{$oldquestion->batch_id}}</a></td>
      <td>{{$oldquestion->subject_descriptions}}</td>
      <td><a href="/">{{$oldquestion->questions}}</td>
      <td>{{$oldquestion->exam_date}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
<div>
<table style="width:100%;" align="center" border="0px">
<tr>
      <td align="center">{{$oldquestions->links()}}</td>
      <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
</tr>
</table>
</div>
</section>
    </x-slot>
</x-layout>