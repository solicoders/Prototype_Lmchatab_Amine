


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter comment</h3>
    </div>
    <form method="POST" action="{{ route('comment.store', $comment) }}">
        @csrf
        <div class="card-body">
            <div class="form-group mb-0">
                <label for="comment">comment</label>
                <input name="comment" type="text" class="form-control" id="comment" placeholder="Enter comment">
            </div>
            <div class="form-group mb-0 mt-3">
                <label for="page_id">Page key</label>
                <select id="page_id" class="form-control" name="page_id">
                    @forelse ($pages as $page)
                        <option value="{{ $page->id }}" {{ $comment->page_id == $page->id ? 'selected' : '' }}>
                            {{ $page->page_title }}
                        </option>
                    @empty
                        <option>Empty</option>
                    @endforelse
                </select>
            </div>
            @error('comment')
                <div class="text-danger mb-0">{{ $message }}</div>
            @enderror
        </div>
        <div class="card-footer">
            <a href="{{ route('comment.index') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
