

@extends('layouts.nav')
@extends('layouts.slider')


@section('content')

<body>
  <div class="container mt-5 ">
<div class="row">

@foreach ($articales as $c)

                  <div class="col-lg-6 mt-5 px-5 allArticale articale">
                    <a href='{{ url("articales/element/$c->id") }}'>
                      <div class="image">
                      <img src="{{ asset("images/imgArticales/$c->image") }}"
                      width="470px"height="470px" alt="">
                      </div>
                      <div class="info shadow-lg">
                        <h5>Title: {{ $c->title }} </h5>
                        <p>{{ $c->description }} </p>
                        <p>Auther: {{ $c->auther }} </p>
                      </div>
                    </a>
                    </div>
                    @endforeach

                  </div>
                  </div></a>
                  <br>
                  <br>




</body>

@endsection