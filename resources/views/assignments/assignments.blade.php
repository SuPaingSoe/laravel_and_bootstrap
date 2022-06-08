<x-layout>
    <x-slot name="title">
    <title>Assignments For MBA</title>
    </x-slot>
    <x-slot name="content">
        <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <section class="container text-center" id="blogs">
    <p align="left" class="text-primary"><strong>Assignments List</strong><p>
    <div align="right">
    <input type="text" id="myInput" onkeyup="SearchMultiColumns()" placeholder="Search for information..."><br/>
    </div>
    <div class="mb-3" style="font-size: 11pt; font-family: symbol;">
    <br/>
    <table id="myTable" class="table table-striped js-sort-table" style="width:100%;" align="center" border="1px">
    <thead>
        <tr>
        <th scope="col">Subject Code</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Book Name</th>
        </tr>
    </thead>
    <tbody>
    @foreach($subjects as $subject)
        <tr>
        <td><a href="/assignmentsdownload/{{$subject->id}}">{{$subject->id}}</a></td>
        <td>{{$subject->descriptions}}</td>
        <td>{{$subject->book_name}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    <a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a>
</section>
    </x-slot>
</x-layout>