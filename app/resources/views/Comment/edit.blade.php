@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1>$comment</h1> --}}
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ isset($comment) ? 'Edit task' : 'Ajouter comment' }}</h3>
                        </div>

                        <form method="POST" action="{{ isset($comment) ? route('comment.update', ['comment' => $comment]) : route('comment.store', $comment) }}">
                            @csrf
                            @if (isset($comment))
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label for="comment">comment</label>
                                    <input name="comment" type="text" class="form-control" id="comment" placeholder="Enter comment"
                                        value="{{ old('comment', isset($comment) ? $comment->comment : '') }}">
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
                                <button type="submit" class="btn btn-primary">{{ isset($comment) ? 'Update' : 'Submit' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
