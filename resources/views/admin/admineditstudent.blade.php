<x-layout>
    <x-slot name="title">
    <title>Student Edit Form</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Student Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
    <form method="POST" enctype="multipart/form-data" action="/admin/{{$student->id}}/student/update">
    @csrf
    @method('patch')
    <div class="mb-3">
                <label for="studentname" class="form-label">Student Name</label>
                <input type="text" name="studentname" class="form-control" id="studentname" aria-describedby="studentname" style="font-size: 11pt; font-family: symbol;" value="{{$student->student_name}}">
                @error('studentname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
                <label for="organizationname" class="form-label">Organization Name</label>
                <input type="text" name="organizationname" class="form-control" id="organizationname" aria-describedby="organizationname" style="font-size: 11pt; font-family: symbol;" value="{{$student->organization_name}}">
                @error('organizationname')
                <p class="text-danger">{{$message}}</p>
                @enderror
    </div>
    <div class="mb-3">
                <label for="studentaddress" class="form-label">Student Address</label>
                <input type="text" name="studentaddress" class="form-control" id="studentaddress" aria-describedby="studentaddress" style="font-size: 11pt; font-family: symbol;" value="{{$student->student_address}}">
                @error('studentaddress')
                <p class="text-danger">{{$message}}</p>
                @enderror
    </div>
    <div class="mb-3">
    <label for="batchid" class="form-label">MBA Batch</label>
    <input type="text" name="batchid" class="form-control" id="batchid" style="font-size: 11pt; font-family: symbol;" value="{{$student->batch_id}}">
    @error('batchid')
    <p class="text-danger">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-3">
        <label for="photos" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Student Photo - </label>
        <label for="photos" class="form-label" style="font-size: 11pt; font-family: symbol;">{{$student->student_name}}</label>
        <input type="file" name="photos" id="photos" class="form-contorl">
    </div>

    <div class="mb-3">
    <button class="btn btn-primary me-md-2" type="submit">Save</button>
    </div>       
    </form>
    </div>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 10pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 10pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
    </x-slot>
</x-layout>