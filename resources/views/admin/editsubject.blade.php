<x-layout>
    <x-slot name="title">
    <title><span style="font-size: 11pt; font-family: symbol;">Subject Edit Form</span></title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 10pt; font-family: symbol;">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Subject Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$subject->id}}/subject/update">
                @method('patch')
                @csrf
            <div class="mb-3">
                <label for="subjectcode" class="form-label">Subject Code</label>
                <input type="text" name="subjectcode" class="form-control" id="subjectcode" style="font-size: 11pt; font-family: symbol;" value="{{$subject->id}}">
                @error('subjectcode')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subjectname" class="form-label">Subject name</label>
                <input type="text" name="subjectname" class="form-control" id="subjectname" style="font-size: 11pt; font-family: symbol;" value="{{$subject->descriptions}}">
                @error('subjectname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bookname" class="form-label">Book Name</label>
                <input type="text" name="bookname" class="form-control" id="bookname" style="font-size: 11pt; font-family: symbol;" value="{{$subject->book_name}}">
                @error('bookname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subjectphoto" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Subject Book Photo - </label>
                <label for="subjectphoto" class="form-label" style="font-size: 11pt; font-family: symbol;">{{$subject->book_name}}</label>
                <input type="file" name="subjectphoto" id="subjectphoto" class="form-contorl">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>