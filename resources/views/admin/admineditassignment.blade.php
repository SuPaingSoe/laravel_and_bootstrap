<x-layout>
    <x-slot name="title">
    <title>Assignment Edit Form</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Assignment Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$assignment->id}}/assignment/update">
                @csrf
                @method('patch')
           <div class="mb-3">
                <label for="sltbatch_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch ID</label>
                <input type="text" name="sltbatch_id" class="form-control" id="sltbatch_id" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->batch_id}}">
                @error('sltbatch_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sltsubject_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject ID</label>
                <input type="text" name="sltsubject_id" class="form-control" id="sltsubject_id" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->subject_id}}">
                @error('sltsubject_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sltsubject_name" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Name</label>
                <input type="text" name="sltsubject_name" class="form-control" id="sltsubject_name" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->subject_name}}">
            @error('sltsubject_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="sltstudent_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Student ID</label>
                <input type="text" name="sltstudent_id" class="form-control" id="sltstudent_id" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->student_id}}">
            @error('sltstudent_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="sltassignment_name" class="form-label" style="font-size: 11pt; font-family: symbol;">Assignment Name</label>
                <input type="text" name="sltassignment_name" class="form-control" id="sltassignment_name" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->assignment_name}}">
            @error('sltassignment_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="sltdeadline" class="form-label" style="font-size: 11pt; font-family: symbol;">Deadline</label>
                <input type="text" name="sltdeadline" class="form-control" id="sltdeadline" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->deadline}}">
            @error('sltdeadline')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="sltlecturer_name" class="form-label" style="font-size: 11pt; font-family: symbol;">Lecturer Name</label>
                <input type="text" name="sltlecturer_name" class="form-control" id="sltlecturer_name" style="font-size: 11pt; font-family: symbol;" value="{{$assignment->teacher_name}}">
            @error('sltlecturer_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="mb-3">
                <label for="assignment" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Assignment - </label>
                <label for="assignment" class="form-label" style="font-size: 11pt; font-family: symbol;">{{$assignment->assignment_name}}</label>
                <input type="file" name="assignment" id="assignment" class="form-contorl">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 10pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>
