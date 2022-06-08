<x-layout>
    <x-slot name="title">
    <title>Lecturer Registration</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Lecturer Registration</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
    <form method="POST" enctype="multipart/form-data" action="/registerteacherstore">
    @csrf
    <div class="mb-3">
                <label for="lecturername" class="form-label" style="font-size: 11pt; font-family: symbol;">Lecturer Name</label>
                <input type="text" name="lecturername" class="form-control" id="lecturername" style="font-size: 11pt; font-family: symbol;" aria-describedby="lecturername">
                @error('lecturername')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
                <label for="profile" class="form-label" style="font-size: 11pt; font-family: symbol;">Profile</label>
                <input type="text" name="profile" class="form-control" id="profile" style="font-size: 11pt; font-family: symbol;" aria-describedby="profile">
                @error('profile')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
                <label for="joindate" class="form-label" style="font-size: 11pt; font-family: symbol;">Join Date</label>
                <input type="text" name="joindate" class="form-control" id="joindate" style="font-size: 11pt; font-family: symbol;" aria-describedby="joindate">
                @error('joindate')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
        <label for="lecturerthumbnail" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Lecturer Photo - </label><br>
        <input type="file" name="lecturerthumbnail" id="lecturerthumbnail" style="font-size: 11pt; font-family: symbol;" class="form-contorl">
        @error('lecturerthumbnail')
        <p class="text-danger">{{$message}}</p>
        @enderror
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
            <td align="center"><a href="/teachers" style="font-size: 11pt; font-family: symbol;">Lecturer List</a></td>
        </tr>
    </table>
    
    </x-slot>
</x-layout>