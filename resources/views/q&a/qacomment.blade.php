<x-layout>
    <x-slot name="title">
    <title>Q & A</title>
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

    <div class="display-comment shadow-sm">
        <label for="dispalycomment" class="form-label"><b>Questions & Answers</b></label><br/>
        <div class="card-body p-4">
            <form method="post" action="/registercomment">
                @csrf
                <div class="form-group">
                    <input type="text" name="body" style="font-size: 11pt; font-family: symbol;" class="form-control" placeholder="Add comment..." /><br/>
                    <input type="submit" style="font-size: 11pt; font-family: symbol;" class="btn btn-primary btn-sm" value="Add" />
                </div>
            </form><br/>
        </div>
        </div>
            @foreach($comments as $comment)
                <div class="display-comment shadow-sm">

                    <div class="form-group card-body p-4">

                    <img class="rounded-circle shadow-1-strong me-2" src="/storage/{{$comment->user->user_photo}}" alt="avatar" width="25" height="25" />
                        <strong>{{$comment->user_name}}</strong>
                        <!-- &emsp;<span class="dot mb-1"></span>&emsp; -->
                        <label style="font-size: 10pt; font-family: symbol;">{{$comment->created_at->diffForHumans()}}</label>
                        <p style="text-indent :3em;" class="small mb-0">{{$comment->comment_body}}</p><br/>

                        <!-- <p style="font-size: 09pt; font-family: symbol;"><span class="dot mb-1"></span>{{$comment->created_at->diffForHumans()}}</p> -->
                        <!-- &emsp;<label class="text-warning" style="font-size: 09pt; font-family: symbol;">Reply</label><br/> -->
                        <form method="post" action="/registercommentreply">
                        @csrf
                        <div class="form-group" style="font-size: 09pt; font-family: symbol;">
                        <input type="text" name="reply" style="font-size: 09pt; font-family: symbol;" class="form-control" placeholder="Reply..." /><br/>
                        <input type="submit" style="font-size: 09pt; font-family: symbol;" class="btn btn-warning" value="Reply" /><br/><br/>
                        <input type="hidden" name="comment_id" value="{{$comment->id}}" />
                        </div>
                        @foreach($replies as $reply)

                        @if($reply->comment_id == $comment->id)
                        <!-- <div class="d-flex justify-content-between align-items-center"> -->
                        <p>
                        &emsp;&emsp;<img class="rounded-circle shadow-1-strong me-2" src="/storage/{{$reply->user->user_photo}}" alt="avatar" width="25" height="25" />
                        <label><strong>{{$reply->user_name}}</strong></label>
                        <!-- </div> -->
                        <div>
                                <p class="small mb-0">
                                &emsp;&emsp;&emsp;&emsp;&emsp;{{$reply->reply_body}}
                                </p>
                        </div>
                        </p>
                        @endif
                        @endforeach
                    </div>
                </div>
                </form><br/>
            @endforeach

        <div>
            <p>

            </p>
        </div>

        <div style="font-size: 10pt; font-family: symbol;">
        <br/>
            <table style="width:100%;" align="center" border="0px">
            <tr>
            <td align="center">{{$comments->links()}}</td>
            <td align="center"><td align="center"><a href="/post_login" style="font-size: 11pt; font-family: symbol;">Home Page</a></td>
            </tr>
            </table>
        </div>
    </div>
    </div>
    </div>
    
    </x-slot>
</x-layout>