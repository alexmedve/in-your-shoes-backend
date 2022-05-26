@extends('layouts.admin')
      
@section('content')
<form method="POST" onsubmit="validate(this)" enctype="multipart/form-data" @if(isset($article)) action="{{ url('/blog/post/'.$article->id) }}" @else action="{{ url('/blog/post') }}"  @endif>
      {{ csrf_field() }} 
      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Blog
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  @if(isset($article)) Edit article "{{ $article->title }}" @else Add Article @endif
                </h1>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <button class="btn btn-primary lift">
                  Submit
                </button>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->

      <!-- CARDS -->
      <div class="bg-gray-100" style="padding-bottom: 1px;">
      <div class="container-fluid px-lg-4 px-xl-5">
        <!-- Page Header-->
     
    <section>
     
      <div class="row mb-5">
        <div class="col-lg-12 col-xxl-12 mb-4 mb-lg-12">
          <div class="card addpost__page">
            <div class="card-body">
              <label class="form-label" for="postTitle">Article title</label>
              <input value="{{ isset($article) ?? $article->title }}" class="form-control mb-4" name="title" placeholder="title" required id="postTitle" type="text">
              
              <label class="form-label">Author</label>
              <select name="author_id" required id="" class="form-control">
                <option value="" hidden>Choose</option>
                @foreach($authors as $author)
                  <option @if(isset($article) && $article->author_id == $author->id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
              </select>
              <br>

              <label class="form-label">Categories</label>
              @foreach($categories as $category) 
                <br>
                <input
                @if(isset($article))
                  @foreach($article->categories as $cat)
                    @if($cat->id == $category->id) 
                      checked
                    @endif
                  @endforeach
                @endif
                
                type="checkbox" name="category[{{ $category->id }}]"> {{ $category->name }}
              @endforeach
              <br><br>

              <label class="form-label">Content</label>
              <textarea name="content" required class="form-control ql-editor" id="" cols="30" rows="10">{{ isset($article) ? $article->content : ""}}</textarea>

              <br>
              <div class="form-group">
                <!-- Label -->
                <label class="form-label mb-1">
                  Cover image @if(isset($article)) (optional) @endif
                </label>
                <input type="file" @if(!isset($article)) selected @endif name="cover_url" class="form-control">
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</form>

<script>
  function validate(form) {
    var quills = document.getElementsByClassName("ql-editor");
    for (var i = 0; i < quills.length; i++) {
      var textarea = quills[i].parentElement.parentElement.querySelector('textarea');
      console.log(textarea);
      textarea.innerHTML = quills[i].innerHTML;
    };

    return true;
  }
</script>
@endsection