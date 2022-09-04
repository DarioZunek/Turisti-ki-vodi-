
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Komentari korisnika</h4>
  
                    <hr />
                    @include('city.commentsDisplay', ['comments' => $city->comments, 'city_id' => $city->id])
   
                    <h4>Dodaj komentar</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="city_id" value="{{ $city->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection