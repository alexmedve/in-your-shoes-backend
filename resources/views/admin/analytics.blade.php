@extends('layouts.admin')
      
@section('content')

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
            Analytics
          </h1>

        </div>
        <div class="col-auto">

        

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .header-body -->

    <div class="row">
      <div class="col-md-4 col-xs-12">
        <div class="alert alert-secondary" style="background-color: #343A40">
          <h1 class="text-center text-bold mb-3" style="font-size: 45px">Visitors</h1>
          <div class="d-flex">
            <div style="margin-left: auto; margin-right: auto; font-size: 37px; margin-bottom: 0px">
              {{ count($subscribers) }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="alert alert-secondary" style="background-color: #343A40">
          <h1 class="text-center text-bold mb-3" style="font-size: 45px">Sessions</h1>
          <div class="d-flex">
            <div style="margin-left: auto; margin-right: auto; font-size: 37px; margin-bottom: 0px">
              {{ count($subscriber_sessions) }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="alert alert-secondary" style="background-color: #343A40">
          <h1 class="text-center text-bold mb-3" style="font-size: 45px">Contacts</h1>
          <div class="d-flex">
            <div style="margin-left: auto; margin-right: auto; font-size: 37px; margin-bottom: 0px">
              {{ count($messages) }}
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="mb-5">
      <div class="card card-table posts__table">
        <div class="">
          <table class="table table-hover align-middle mb-0" id="postDatatable">
            <thead>
              <tr>
                <th>Actions</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Subscribed to newsletter</th>
                <th>Sessions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($subscribers as $subscriber)
              <tr>
                <td style="width: 20px; text-align: center">
                  <a href="{{ url('/analytics/'.$subscriber->id) }}" class="btn btn-primary">
                    <i class="fe fe-eye"></i>
                  </a>
                </td>
                <td>{{$subscriber->name ?? 'unavailable'}}</td>
                <td>{{$subscriber->email ?? 'unavailable'}}</td>
                <td>{{$subscriber->company ?? 'unavailable'}}</td>
                <td>{{$subscriber->phone ?? 'unavailable'}}</td>
                <td>@if($subscriber->newsletter) Yes @else No @endif</td>
                <td>{{ count($subscriber->sessions) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table><span class="me-2" id="categoryBulkAction">
            <select class="form-select form-select-sm d-inline w-auto" name="categoryBulkAction">
              <option>Bulk Actions</option>
              <option>Delete</option>
            </select>
            <button class="btn btn-sm btn-outline-primary align-top">Apply</button></span>
        </div>
      </div>
    </section>
  </div>
</div> <!-- / .header -->

@endsection