@extends('layouts.master')
{{-- @dd($pages) --}}
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                <form method="POST" action="{{ route('comment.store'    ) }}">
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
                                    <option value="{{ $page->id }}">
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
                    {{-- @include('comment.formfields') --}}
                </div>
            </div>
        </div>
    </section>
@endsection
