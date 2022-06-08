<x-layout>
    <x-slot name="title">
    <title>Login</title>
    </x-slot>
    <x-slot name="content">
    <x-menu></x-menu>
        <div>
            <p>
                
            </p>
        </div>
    <div class="container" style="font-size: 11pt; font-family: symbol;">
    <table style="width:100%;" align="center" border="0px">
        <tr>
            <td align="right"> <a href="/subjectslist">Back to Subject</a></td>
        </tr>
    </table>
        <form method="">

        <table class="table table-striped" style="width:100%;" align="center" border="1px">
        <thead>
            <tr>
            <th scope="col">{{$subject->descriptions}}</th>
            <th scope="col">Subject Abstract</th>
            </tr>
        </thead>
            <tr>
                <td>
                    <img src="/storage/{{$subject->subject_photo}}" width="280px" height="280px" alt="">
                </td>
                <td>
                    <p>{{$subject->abstract}}</p>
                </td>
            </tr>
        </table>
        </form>
   </div>
   <div>

    </div>
  
   
</x-slot>
</x-layout>