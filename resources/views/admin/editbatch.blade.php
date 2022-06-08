<x-layout>
    <x-slot name="title">
    <title>MBA Batch List</title>
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
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Batch Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
    <form method="POST" enctype="multipart/form-data" action="/admin/{{$batch->id}}/batch/update">
                @method('patch')
                @csrf
        <div class="mb-3">
            <label for="batchid" class="form-label">Batch ID</label>
            <input type="text" name="batchid" class="form-control" id="batchid" style="font-size: 11pt; font-family: symbol;" value="{{$batch->id}}">
            @error('batchid')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="opendate" class="form-label">Open Date</label>
            <input type="text" name="opendate" class="form-control" id="opendate" style="font-size: 11pt; font-family: symbol;" value="{{$batch->open_date}}">
            @error('opendate')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" id="duration" style="font-size: 11pt; font-family: symbol;" value="{{$batch->duration}}">
            @error('duration')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="examdate" class="form-label">Exam Date</label>
            <input type="text" name="examdate" class="form-control" id="examdate" style="font-size: 11pt; font-family: symbol;" value="{{$batch->exam_date}}">
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
    <table style="width:100%;" align="center" border="0px">
        <tr>
            <td align="center"><a href="/batcheslist">Back to Batch List</a></td>
        </tr>
    </table>
    
    </x-slot>
</x-layout>