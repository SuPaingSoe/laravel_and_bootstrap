<x-layout>
    <x-slot name="title">
    <title>Assignments For MBA</title>
    </x-slot>
    <x-slot name="content">

    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Assignment Upload Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
    <form method="POST" enctype="multipart/form-data" action="/assignmentupload">
    @csrf
    <div class="mb-3">
                <label for="assignmentname" class="form-label" style="font-size: 11pt; font-family: symbol;">Assignment Name</label>
                <input type="text" name="assignmentname" class="form-control" id="assignmentname" style="font-size: 11pt; font-family: symbol;" aria-describedby="Assignment">
    @error('assignmentname')
    <p class="text-danger">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-3">
    <label for="sltbatch" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch ID</label>
    <select class="form-control" name="sltbatch" style="font-size: 11pt; font-family: symbol;">
    @foreach($batches as $batch)
    <option>{{$batch->id}}</option>
    @endforeach
    </select>
    </div>

    <div class="mb-3">
    <label for="sltstudentid" class="form-label" style="font-size: 11pt; font-family: symbol;">Student ID</label>
    <select class="form-control" name="sltstudentid" style="font-size: 11pt; font-family: symbol;">
    @foreach($students as $student)
    <option>{{$student->id}}</option>
    @endforeach
    </select>
    </div>

    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
    <label for="deadline" style="font-size: 11pt; font-family: symbol;">Assignment Deadline</label>
    <input placeholder="yyyy-mm-dd" type="text" id="deadline" class="form-control" style="font-size: 11pt; font-family: symbol;" name="deadline">
    <i class="fas fa-calendar input-prefix"></i>
    @error('deadline')
    <p class="text-danger">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-3">
    <label for="sltsubjectcode" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Code</label>
    <select class="form-control" name="sltsubjectcode" style="font-size: 11pt; font-family: symbol;">
    @foreach($subjects as $subject)
    <option>{{$subject->id}}</option>
    @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="sltsubjectname" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Name</label>
    <select class="form-control" name="sltsubjectname" style="font-size: 11pt; font-family: symbol;">
    @foreach($subjects as $subject)
    <option>{{$subject->descriptions}}</option>
    @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="sltteachername" class="form-label" style="font-size: 11pt; font-family: symbol;">Lecturer Name</label>

    <select class="form-control" name="sltteachername" style="font-size: 11pt; font-family: symbol;">
    @foreach($teachers as $teacher)
    <option>{{$teacher->teacher_name}}</option>
    @endforeach
    </select>
    </div>
    <div class="mb-3">
    <label for="thumbnail" class="form-label" style="font-size: 11pt; font-family: symbol;">Choose File</label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-contorl" style="font-size: 11pt; font-family: symbol;">
    </div>
    <div class="mb-3">
    <button class="btn btn-primary me-md-2" type="submit">Save</button>
    </div>       
    </form>
    </div>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
    

    </x-slot>
</x-layout>