<x-layout>
    <x-slot name="title">
    <title>Old Questions Edit Form</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Old Questions Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$oldquestion->id}}/oldquestion/update">
                @csrf
                @method('patch')
           <div class="mb-3">
                <label for="sltbatch_id" class="form-label">Batch ID</label>
                <input type="text" name="sltbatch_id" class="form-control" id="sltbatch_id" value="{{$oldquestion->batch_id}}">
                @error('sltbatch_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sltsubject_id" class="form-label">Subject ID</label>
                <input type="text" name="sltsubject_id" class="form-control" id="sltsubject_id" value="{{$oldquestion->subject_id}}">
                @error('sltsubject_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sltsubject_descriptions" class="form-label">Subject Descriptions</label>
                <input type="text" name="sltsubject_descriptions" class="form-control" id="sltsubject_descriptions" value="{{$oldquestion->subject_descriptions}}">
                @error('sltsubject_descriptions')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="oldquestions" class="form-label">Upload Old Questions - </label>
                <label for="oldquestions" class="form-label">{{$oldquestion->subject_descriptions}}({{$oldquestion->exam_date}})</label>
                <input type="file" name="oldquestions" id="oldquestions" class="form-contorl">
            </div>
            <div class="mb-3">
                <label for="examdate" class="form-label">Exam Date</label>
                <input type="text" name="examdate" class="form-control" id="examdate" value="{{$oldquestion->exam_date}}">
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
    <table style="width:100%;" align="center" border="0px" style="font-size: 10pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 10pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>