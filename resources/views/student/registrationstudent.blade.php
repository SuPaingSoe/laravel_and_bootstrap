<x-layout>
    <x-slot name="title">
    <title>Student Registration</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Student Registration</h3>
    <div class="card p-4 my-3 shadow-sm">
    <form method="POST" enctype="multipart/form-data" action="/registerstudentstore">
    @csrf
    <div class="mb-3">
                <label for="studentname" class="form-label">Student Name</label>
                <input type="text" name="studentname" class="form-control" id="studentname" aria-describedby="studentname">
                @error('studentname')
                <p class="text-danger">{{$message}}</p>
                @enderror
    </div>
    <div class="mb-3">
                <label for="organizationname" class="form-label">Organization Name</label>
                <input type="text" name="organizationname" class="form-control" id="organizationname" aria-describedby="organizationname">
                @error('organizationname')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
                <label for="studentaddress" class="form-label">Student Address</label>
                <input type="text" name="studentaddress" class="form-control" id="studentaddress" aria-describedby="studentaddress">
                @error('studentaddress')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
    <div class="mb-3">
    <label for="sltbatchname" class="form-label">MBA Batch</label>
    <select class="form-control" name="sltbatchname">
    @foreach($batchs as $batch)
    <option>{{$batch->id}}</option>
    @endforeach
    </select>
    </div>

    <div class="mb-3">
    <label for="thumbnail" class="form-label">Upload Student Photo - </label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-contorl">
    @error('thumbnail')
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
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>

    
    </x-slot>
</x-layout>