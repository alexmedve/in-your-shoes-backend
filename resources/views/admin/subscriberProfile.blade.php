@extends('layouts.admin')
      
@section('content')
<div class="header">
  <div class="container-fluid">

    <!-- Body -->
    <div class="header-body">
      <div class="row align-items-end">
        <div class="col">

          <!-- Pretitle -->
          <a href="{{ url('/analytics') }}" class="text-black mb-3" style="color: black">
            < Back
          </a>

          <!-- Title -->
          <h1 class="header-title mt-3">
            {{ $subscriber->name }}
          </h1>

        </div>
        
      </div> <!-- / .row -->
    </div> <!-- / .header-body -->

    <br>  
    <div class="card">
      <div class="card-body">
        <h3>First recorded interaction: {{ $subscriber->start_interaction }}</h3>
        <h3>Last recorded interaction: {{ $subscriber->end_interaction }}</h3>
        <br>

        <h3>Interests:</h3>
        <div class="row">
          @foreach($categories as $category)
            @if($category['views'] > 0)
            <div class="col-md-4 col-xs-12">
              <div class="alert alert-secondary">
                {{ $category['name'] }} ({{$category['views']}})
              </div>
            </div>
            @endif
          @endforeach
        </div>

        <h3>Sessions:</h3>
        @foreach($subscriber->sessions as $session)
          <div class="btn btn-primary btn-block" data-toggle="collapse" data-target="#sub{{$subscriber->id}}-session{{$session->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                Session id: #{{ $session->id }}
          </div>
          <div class="collapse" id="sub{{$subscriber->id}}-session{{$session->id}}">
            <div class="card card-body mt-1 mb-1">
              @if($session->articles)
                @foreach($session->articles as $article)
                  <div class="alert alert-secondary d-flex" style="font-size: 20px">
                    {{ $article->title }} 
                    @foreach($article->categories as $category) 
                      <span class="badge badge-info ml-auto" style="font-size: 17px">{{ $category->name }}</span>
                    @endforeach
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        @endforeach

        <br><br>
        <h3>Newsletter preferences:</h3>
        <div class="row">
          <div class="col-md-6">
            <h4>Categories:</h4>
            <div class="row">
              @if(count($newsletterCategories) > 0) 
              @foreach($newsletterCategories as $category) 
                  @if($category['views'] > 0)
                    <div class="col-md-4 col-xs-12">
                      <div class="alert alert-secondary">
                        {{ $category['name'] }}
                      </div>
                    </div>
                  @endif
              @endforeach
              @else 
                <div class="col-md-4 col-xs-12">
                  <div class="alert alert-secondary">
                    All Categories
                  </div>
                </div>
              @endif
            </div>
          </div>
          <div class="col-md-6">
            <h3>Frequency: <div class="badge badge-primary" style="font-size: 17px">{{ $subscriber->frequency }}</div></h4>
          </div>
        </div>
        
        </div>
      </div>  
    </div>

  </div>
</div> <!-- / .header -->

@endsection