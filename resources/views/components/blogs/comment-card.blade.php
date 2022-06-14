@props(['comments'])
@if ($comments != null && auth()->user()==null)
@foreach ( $comments as $comment)
<div class="full theme_bg white_fonts command_cont">
    <p class="comm_head">
        {{ $comment->user->name }}<span> {{ $comment->created_at }}</span>
    </p>
     <p> 
        {{ $comment->text }}
    </p>
</div>
@endforeach
<div class="center">
    {{ $comments->links() }}
    </div>
@elseif ($comments != null && auth()->user()!= null)
    @foreach($comments as $comment)
        <div class="full theme_bg white_fonts command_cont">
    <p class="comm_head">
    {{ $comment->user->name }}<span>{{ $comment->created_at }}</span>
    @if($comment->user->id == auth()->user()->id)
    <a class="rply" onclick="return confirm('Are you sure you want to delete this comment?');" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
    <a class="rply" style="margin-right:10px;" href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
    @endif
</p>
    <p> {{ $comment->text }}</p>
</div>
@endforeach
<div class="center">
    {{ $comments->links() }}
    </div>
@else
    <div class="full theme_bg white_fonts command_cont">
    <h3>This post has no comments yet.</h3>
</div>
@endif