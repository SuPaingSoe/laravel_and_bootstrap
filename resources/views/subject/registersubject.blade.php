<x-layout>
    <x-slot name="title">
    <title>Subject Registration Form</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Subject Registration Form</h3>
    <div class="card p-4 my-3 shadow-sm">
            <form method="POST" enctype="multipart/form-data" action="/registersubjectstore">
                @csrf
            <div class="mb-3">
                <label for="subjectcode" class="form-label">Subject Code</label>
                <input type="text" name="subjectcode" class="form-control" id="subjectcode" value="">
                @error('subjectcode')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subjectname" class="form-label">Subject name</label>
                <input type="text" name="subjectname" class="form-control" id="subjectname" value="">
                @error('subjectname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bookname" class="form-label">Book Name</label>
                <input type="text" name="bookname" class="form-control" id="bookname" value="">
                @error('bookname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="txtabstract" class="form-label">Abstract</label>
                <textarea name="txtabstract" id="txtabstract" cols="30" rows="10" class="form-control editor"></textarea>
                @error('txtabstract')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
            <label for="subjectthumbnail" class="form-label">Upload Subject Photo - </label><br>
            <input type="file" name="subjectthumbnail" id="subjectthumbnail" class="form-contorl">
            @error('subjectthumbnail')
            <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
    
</div>

    </x-slot>
</x-layout>