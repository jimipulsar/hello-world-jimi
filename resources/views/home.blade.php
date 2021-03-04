@extends('layouts.app')

@section('content')

<!--Main layout-->
<main class="mt-5" id="crud">
<div class="container">
  <!--Section: Content-->
  <section class="text-center">
    <h4 class="mb-5"><strong>Lista Utenti</strong></h4>

    <div class="row">
        @foreach($users as $user)
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
              class="img-fluid"
            />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">
            {{$user->email}}
            </p>
            <a href="#!" class="btn btn-primary">Button</a>
          </div>

        </div>
      </div>
        @endforeach
    </div>
    <hr>
    <div class="d-flex justify-content-center">
       {{$users->links()}}
     </div>
  </section>
  <!--Section: Content-->
</div>
</main>
<!--Main layout-->

@endsection
