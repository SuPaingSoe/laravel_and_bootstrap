<x-layout>
    <x-slot name="title">
    <title>Information Distribution</title>
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
        <h3 class="text-primary my-3 text-center" style="font-size: 11pt; font-family: symbol;">Information Distribution</h3>
    <div class="card p-4 my-3 shadow-sm">
    <form method="POST" enctype="multipart/form-data" action="/sendinformation">
    @csrf
    <div class="mb-3">
                <label for="infotitle" class="form-label">Title</label>
                <input type="text" name="infotitle" class="form-control" id="infotitle" aria-describedby="infotitle">
    </div>
    <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" name="content" class="form-control" id="content" aria-describedby="content">
    </div>
    <div class="mb-3">
        <label for="attachfile" class="form-label">Upload attach file if necessary</label>
        <input type="file" name="attachfile" id="attachfile" class="form-contorl">
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
            <td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home</a></td>
        </tr>
    </table>
    
    </x-slot>
</x-layout>