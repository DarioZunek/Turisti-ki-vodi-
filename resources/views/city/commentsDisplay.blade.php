@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong> {{  date('d/m/Y H:i:s', strtotime('+2 hours', strtotime( $comment->created_at ))) }}
        <p>{{ $comment->body }}</p>
            @if (Auth::user() && Auth::user()->type>=2)
            <form method="get" action="{{ route('comments.delete', ['id' => $comment->id]) }}">
                @csrf
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-danger" value="Obriši"/>
                </div>
            </form> 
            @endif

        @auth
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="city_id" value="{{ $city_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <br>
                <input type="submit" class="btn btn-success" value="Odgovori" />
            </div>
            <hr />
        </form>
        @endauth
        @include('city.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach