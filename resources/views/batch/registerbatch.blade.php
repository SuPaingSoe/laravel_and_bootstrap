<x-layout>
    <x-slot name="title">
    <title>MBA Batch Registration</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div>
    </div>

   <div class="container" style="font-size: 10pt; font-family: symbol;">
   <div class="row">
    <div class="col-md-5 mx-auto" style="font-size: 11pt; font-family: symbol;">
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Batch Registration Form</h3>
    <div class="card p-4 my-3 shadow-sm">
    <form method="POST" enctype="multipart/form-data" action="/registerbatchstore">
                 @csrf
        <div class="mb-3">
            <label for="batchid" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch ID</label>
            <input type="text" name="batchid" class="form-control" id="batchid" style="font-size: 11pt; font-family: symbol;" value="">
            @error('batchid')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="opendate" class="form-label" style="font-size: 11pt; font-family: symbol;">Open Date</label>
            <input type="text" name="opendate" class="form-control" id="opendate" style="font-size: 11pt; font-family: symbol;" value="">
            @error('opendate')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label" style="font-size: 11pt; font-family: symbol;">Duration</label>
            <input type="text" name="duration" class="form-control" id="duration" style="font-size: 11pt; font-family: symbol;" value="">
            @error('duration')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="examdate" class="form-label" style="font-size: 11pt; font-family: symbol;">Exam Date</label>
            <input type="text" name="examdate" class="form-control" id="examdate" style="font-size: 11pt; font-family: symbol;" value="">
            @error('examdate')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/batcheslist" style="font-size: 11pt; font-family: symbol;">Back to Batch List</a></td>
        </tr>
    </table>
    
    </x-slot>
</x-layout>