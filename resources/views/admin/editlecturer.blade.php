<x-layout>
    <x-slot name="title">
    <title>Lecturer Edit Form</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto">
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Lecturer Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$teacher->id}}/teacher/update">
                @csrf
                @method('patch')
           <div class="mb-3">
                <label for="teacher_id" class="form-label">Lecturer ID</label>
                <input type="text" name="teacher_id" class="form-control" id="teacher_id" style="font-size: 11pt; font-family: symbol;" value="{{$teacher->id}}">

            </div>
            <div class="mb-3">
                <label for="lecturername" class="form-label">Lecturer Name</label>
                <input type="text" name="lecturername" class="form-control" id="lecturername" style="font-size: 11pt; font-family: symbol;" value="{{$teacher->teacher_name}}">
                @error('lecturername')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="profile" class="form-label">Profile</label>
                <input type="text" name="profile" class="form-control" id="profile" style="font-size: 11pt; font-family: symbol;" value="{{$teacher->profile}}">
                @error('profile')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="joindate" class="form-label">Join Date</label>
                <input type="text" name="joindate" class="form-control" id="joindate" style="font-size: 11pt; font-family: symbol;" value="{{$teacher->join_date}}">
                @error('joindate')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lecturerphoto" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Lecturer Photo - </label>
                <label for="lecturerphoto" class="form-label" style="font-size: 11pt; font-family: symbol;">{{$teacher->teacher_name}}</label>
                <input type="file" name="lecturerphoto" id="lecturerphoto" class="form-contorl">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 10pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 10pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>