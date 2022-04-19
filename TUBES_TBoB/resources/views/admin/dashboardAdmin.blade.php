@extends('admin/adminLayout/main')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome, Admin !</h1>
  </div>
  <div class="mainCard"> 
    <div class="cardContent">
      <div class="d-flex">
        <span data-feather="users" class="cardLogo"></span>
        <h2 class="counter">10</h2>
      </div>
      <h3 class="sub-title">Users</h3>
    </div>
    <div class="cardContent">
      <div class="d-flex">
        <span data-feather="file" class="cardLogo"></span>
        <h2 class="counter">{{ $countWisata }}</h2>
      </div>
      <h3 class="sub-title">Wisata</h3>
    </div>
    <div class="cardContent">
      <div class="d-flex">
        <span data-feather="smile" class="cardLogo"></span>
        <h2 class="counter">10</h2>
      </div>
      <h3 class="sub-title">Feedback</h3>
    </div>
  </div>
@endsection
          