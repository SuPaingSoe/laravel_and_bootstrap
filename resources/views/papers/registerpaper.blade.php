<x-layout>
    <x-slot name="title">
    <title>Registration For Papers</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Papers Registration Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/registerpaperscreate">
                @csrf
            
            <div class="mb-3">
                <label for="sltbatch_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch ID</label>
                <select class="form-control" name="sltbatch_id" style="font-size: 11pt; font-family: symbol;">
                @foreach($batches as $batch)
                <option>{{$batch->id}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="sltstudent_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Student ID</label>
                <select class="form-control" name="sltstudent_id" style="font-size: 11pt; font-family: symbol;">
                @foreach($students as $student)
                <option>{{$student->id}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="papertitle" class="form-label" style="font-size: 11pt; font-family: symbol;">Paper Title</label>
                <input type="text" name="papertitle" class="form-control" id="papertitle" style="font-size: 11pt; font-family: symbol;" value="">
                @error('papertitle')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="papers" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Paper</label><br/>
                <input type="file" name="papers" id="papers" class="form-contorl" style="font-size: 11pt; font-family: symbol;">
                @error('papers')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="finisheddate" class="form-label" style="font-size: 11pt; font-family: symbol;">Finished Date</label>
                <input type="text" name="finisheddate" class="form-control" id="finisheddate" style="font-size: 11pt; font-family: symbol;" value="">
                @error('finisheddate')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
    </div>
    </div>
    <a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a>
</div>

    </x-slot>
</x-layout>