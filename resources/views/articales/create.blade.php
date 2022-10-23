
@extends('layouts.nav')


@section('content')

<body>
  <div class="container mt-5">
          <form action={{ url('articales/store') }} method="POST"
            enctype="multipart/form-data">        
              @csrf
          
                      <div class="row mb-3 ">
                    <h4 class="mt-5 mb-3">Add article</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">title</label>
                      <div class=" col-lg-8">
                        <input name="title" type="text" class="form-control" id="title" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="	description" class="col-md-4 col-lg-3 col-form-label">	description</label>
                      <div class="   col-lg-8">
                        <textarea name="description" type="text" class="form-control" id="	description"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="auther" class="col-md-4 col-lg-3 col-form-label">auther</label>
                      <div class="col-lg-8">
                        <input name="auther" type="text" class="form-control" id="auther" >
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="image" class="col-md-4 col-lg-3 col-form-label">
                      image</label>
                      <div class="col-lg-8">
                        <input name="avatar" type="file" class="form-control"
                        id="image">
                      </div></div>

                          <div class="text-center">
                          <button  class="btn btn-dark"type="submit">Add Article</button>
                          <a  class="btn btn-danger mx-5" href ="article.php">Back to article</a>
                    </div>
                  </form>
                  </div>




</body>

</html>