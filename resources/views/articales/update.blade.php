<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>edit Article</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('cdn')
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <div class="container mt-5">
          <form action={{ url('articales/update') }} method="post" 
            enctype="multipart/form-data">        

          @csrf
              <input name="id"value="{{ $articales->id }}"hidden>

                      <div class="row mb-3 ">
                    <h4 class="mt-5 mb-3">Add article</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">title</label>
                      <div class=" col-lg-8">
                        <input name="title" type="text"
                        value="{{ $articales->title }}"
                        class="form-control" id="title" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="	description" class="col-md-4 col-lg-3 col-form-label">	description</label>
                      <div class="   col-lg-8">
                        <input name="description"
                          value="{{ $articales->description}}"
                        type="textarea" class="form-control" id="	description"></input>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="auther" class="col-md-4 col-lg-3 col-form-label">auther</label>
                      <div class="col-lg-8">
                        <input name="auther" type="text" 
                        value="{{ $articales->auther }}"

                        class="form-control" id="auther" >
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">image</label>
                      <div class=" col-lg-8">
                        <input name="avatar" type="file" 
                          value="{{ $articales->image }}"

                        class="form-control" id="password" >
                      </div></div>
                          <div class="text-center">
                          <button  class="btn btn-dark"type="submit">edit Article</button>
                          <a  class="btn btn-danger mx-5" href ="{{ url("articales/list") }}">Back to Articles</a>
                    </div>
                  </form>
                  </div>




</body>

</html>