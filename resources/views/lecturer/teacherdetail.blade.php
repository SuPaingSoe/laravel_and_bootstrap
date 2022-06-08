<x-layout>
    <x-slot name="title">
    <title>MBA Lecturer Detail</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <section class="container text-center" id="blogs">
    <p> Lecturer Details<p>
    <h5>Lecturer ID - {{$teacher->id}} </h5>
    <h5>Lecturer name - {{$teacher->teacher_name}} </h5>
    <h5>Lecturer profile - {{$teacher->profile}} </h5>
    <h5>Lecturer join date - {{$teacher->join_date}} </h5>
    <a href="/teachers">Back</a>
</section>
    </x-slot>
</x-layout>