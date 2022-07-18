@props(['blog'])
@if (auth()->user()!=null)
<div class="post_commt_form">
    <h4>POST YOUR COMMENT</h4>
        <div class="form_section">
            <form class="form_contant" method="POST" action="{{ env('APP_URL') }}blogs/post">
                @csrf
                <fieldset class="row">
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="field_custom" name="text" placeholder="Write your comment here."></textarea>
                        @error('text')
                        <p style="color: red; font-size:14px;">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    </div>
                <div class="center">
            <button class="btn main_bt" type="submit">POST COMMENT</button>
        </div>
        </fieldset>
        </form>
    </div>
</div>
@else
<div class="post_commt_form">
    <h4 class="text-center">You must be logged in to comment.</h4>
    <div class="center">
    <a href="{{ env('APP_URL') }}login" class="btn main_bt" type="submit">Log In</a>
</div>
</div>
@endif        
