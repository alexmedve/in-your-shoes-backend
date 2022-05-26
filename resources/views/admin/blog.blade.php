@extends('layouts.admin')

@section('content')
  <div class="container-fluid mt-4">
    <h1>Blog</h1>
    <a href="{{ url('/blog/post') }}">
      <button class="btn btn-primary">
        Add article
      </button>
    </a>
    <br><br><br>

    <h3>Categories:</h3>
    @foreach($categories as $category)
      <p>
        <a class="btn btn-info" 
        data-toggle="collapse" 
        href="#collapseExample{{ $category->id }}" 
        role="button" 
        aria-expanded="false" 
        aria-controls="collapseExample">
          {{ $category->name }}
        </a>
      </p>
      <div class="collapse" id="collapseExample{{ $category->id }}">
        @foreach($category->articles as $article)
          <div class="card card-body d-flex">
            {{$article->title}}

            <div class="ml-auto">
              <a href="{{ url('/blog/post/'.$article->id) }}">
                <button class="btn btn-warning">
                  Edit
                </button>
              </a>
              <a href="{{ url('/blog/post/'.$article->id.'/delete') }}">
                <button class="btn btn-danger">
                  Delete
                </button>
              </a>
            </div>
          </div>
        @endforeach

      </div>
    @endforeach

    <br><br><br><br><br>
  </div>
@endsection