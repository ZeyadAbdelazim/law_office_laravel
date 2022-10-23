
@extends('layouts.nav')


@section('content')

<body>
  <div class="container mt-5 ">



                  <div class="row pt-5 mb-5 px-5 articale">
                    
                      <div class="image col-lg-4 displayImage">
                      <img src="{{ asset("images/imgArticales/".$articales->image)}}"
                      alt="person" class="shadow-lg"/></div>
                      <div class="col-lg-8 shadow-lg displayInfo">
                        <h5>Title: {{ $articales->title }} </h5>
                        <p>{{ $articales->description }} </p>
                        <p>Auther: {{ $articales->auther }} </p>
                        
                        
                      </div>                       
                      <a 
                      href="{{ url("articales/list") }}"
                      class="btn btn-dark mt-5"type="submit">Articales</a>
                    </a>
                        @if(auth()->user()->role==1 )

                    <a 
                      href='{{ url("articales/edit/$articales->id") }}'
                      class="btn btn-danger mt-5"type="submit">edit Article</a>
                        @endif

                    </a>
                    </div>
                    

                  </div>
                  </div></a>
                  <br>
                  <br>




</body>

@endsection