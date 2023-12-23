<h4> Share yours ideas </h4>
<form action="{{ route('post.create')}}" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3">
            <textarea class="form-control" id="idea" rows="3" name="idea"></textarea>
            @error('idea')
                <span class="fs6 text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </div>
</form>
<hr>
