<x-layout>
    <x-slot name="title">
    <title>Subjects And Lecturer For MBA New Batch</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p></p>
        </div>

    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">New MBA Batch Registration Form</h3>
        <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
        <form method="POST" enctype="multipart/form-data" action="/registersubjectandteacherstore">
        @csrf
        
        <!-- Batch dropdown section -->
        <div class="mb-3">
            <label for="batch" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch</label>
            <select class="form-control" name="sltbatch" style="font-size: 11pt; font-family: symbol;">
            @foreach($batches as $batch)
            <option>{{$batch->id}}</option>
            @endforeach
            </select>
        </div>

        <!-- Teacher ID dropdown section -->
        <div class="mb-3">
            <label for="teacherid" class="form-label" style="font-size: 11pt; font-family: symbol;">Lecturer ID</label>
            <select class="form-control" name="sltteacherid" style="font-size: 11pt; font-family: symbol;">
            @foreach($teachers as $teacher)
            <option>{{$teacher->id}}</option>
            @endforeach
            </select>
        </div>

        <!-- Teacher dropdown section -->
        <div class="mb-3">
            <label for="teachername" class="form-label" style="font-size: 11pt; font-family: symbol;">Lecturer Name</label>
            <select class="form-control" name="sltteacher" style="font-size: 11pt; font-family: symbol;">
            @foreach($teachers as $teacher)
            <option>{{$teacher->teacher_name}}</option>
            @endforeach
            </select>
        </div>

        <!-- Subject dropdown section -->
        <div class="mb-3">
            <label for="assignmentname" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Code</label>
            <select class="form-control" name="sltsubjectcode" style="font-size: 11pt; font-family: symbol;">
            @foreach($subjects as $subject)
            <option>{{$subject->id}}</option>
            @endforeach
            </select>
        </div>

        <!-- Subject Name dropdown section -->
        <div class="mb-3">
            <label for="subjectname" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Name</label>
            <select class="form-control" name="sltsubjectname" style="font-size: 11pt; font-family: symbol;">
            @foreach($subjects as $subject)
            <option>{{$subject->descriptions}}</option>
            @endforeach
            </select>
        </div>

        <!-- Submit section -->
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