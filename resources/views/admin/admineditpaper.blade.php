<x-layout>
    <x-slot name="title">
    <title>Paper Edit Form</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Paper Edit Form</h3>
    <div class="card p-4 my-3 shadow-sm" style="font-size: 11pt; font-family: symbol;">
            <form method="POST" enctype="multipart/form-data" action="/admin/{{$paper->id}}/paper/update">
                @csrf
                @method('patch')
            <div class="mb-3">
                <label for="sltbatch_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Batch ID</label>
                <input type="text" name="sltbatch_id" class="form-control" id="sltbatch_id" style="font-size: 11pt; font-family: symbol;" value="{{$paper->batch_id}}">
                @error('sltbatch_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sltstudent_id" class="form-label" style="font-size: 11pt; font-family: symbol;">Student ID</label>
                <input type="text" name="sltstudent_id" class="form-control" id="sltstudent_id" style="font-size: 11pt; font-family: symbol;" value="{{$paper->student_id}}">
                @error('sltstudent_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="papertitle" class="form-label" style="font-size: 11pt; font-family: symbol;">Paper Title</label>
                <input type="text" name="papertitle" class="form-control" id="papertitle" style="font-size: 11pt; font-family: symbol;" value="{{$paper->paper_title}}">
                @error('papertitle')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="papers" class="form-label" style="font-size: 11pt; font-family: symbol;">Upload Paper - </label><br/>
                <label for="papers" class="form-label" style="font-size: 11pt; font-family: symbol;">{{$paper->paper_title}}</label>
                <input type="file" name="papers" id="papers" class="form-contorl">
            </div>
            <div class="mb-3">
                <label for="finisheddate" class="form-label" style="font-size: 11pt; font-family: symbol;">Finished Date</label>
                <input type="text" name="finisheddate" class="form-control" id="finisheddate" style="font-size: 11pt; font-family: symbol;" value="{{$paper->finished_date}}">
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
    <table style="width:100%;" align="center" border="0px" style="font-size: 10pt; font-family: symbol;">
        <tr>
            <td align="center"><a href="/post_login" style="font-size: 10pt; font-family: symbol;">Home Page</a></td>
        </tr>
    </table>
</div>

    </x-slot>
</x-layout>