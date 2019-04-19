@extends('layouts.master')

@section('content')
@if(Session::has('info'))
  <div class="row">
    <div class="col-md-12">
      <p class="alert alert-danger">{{ Session::get('info') }}</p>
      </div>
    </div>
  @endif
  @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.create')}}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    {{-- <input type="text" class="form-control" id="content" name="content"> --}}
                    <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                </div>
                @foreach ($tags as $tag)
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                      {{ $tag->name}}
                    </label>
                  </div>
                @endforeach
                {{ csrf_field()}}
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
