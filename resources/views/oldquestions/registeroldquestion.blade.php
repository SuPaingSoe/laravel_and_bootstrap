<x-layout>
    <x-slot name="title">
    <title>Registration For Old Questions</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto" >
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Old Questions Upload Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/registerquestionscreate">
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
                <label for="sltsubject_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject ID</label>
                <select class="form-control" name="sltsubject_id" style="font-size: 11pt; font-family: symbol;">
                @foreach($subjects as $subject)
                <option>{{$subject->id}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="sltsubject_descriptions" class="form-label" style="font-size: 11pt; font-family: symbol;">Subject Descriptions</label>
                <select class="form-control" name="sltsubject_descriptions" style="font-size: 11pt; font-family: symbol;">
                @foreach($subjects as $subject)
                <option>{{$subject->descriptions}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="oldquestions" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Old Questions</label><br/>
                <input type="file" name="oldquestions" id="oldquestions" class="form-contorl" style="font-size: 11pt; font-family: symbol;">
                @error('oldquestions')
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
            </div>
            </form>
    </div>
    </div>
    </div>
    <table style="width:100%;" align="center" border="0px" style="font-size: 11pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/oldquestionslist" style="font-size: 11pt; font-family: symbol;">Old Questions List</a></td>
        </tr>
    </table>

</div>

    </x-slot>
</x-layout>