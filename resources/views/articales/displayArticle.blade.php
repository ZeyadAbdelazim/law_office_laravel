
<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Display Article</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/css.css" rel="stylesheet">

</head>
<body>
  <div class="container mt-5 ">
                    @foreach ($s1 as $data)

  <a href="displayArticle.php?id=<?= $data['id'] ?>">

                  <div class="row">

                    <div class="articale mt-5 mx-5">
                    <div class="row">

                      <div class="displayImage col-lg-4">
                      <p src="{{ asset("images/imgArticales/".$data->image)}}"
                      width="470px"height="470px" alt="">
                    </div>
                      <div class="displayInfo shadow-lg col-lg-7">
                        <h5>Title: {{ $data['title'] }}   </h5>
                        <p>{{  $data['description'] }} </p>
                        <p>Auther: {{ $data['auther'] }}   </p>
                      </div>
                      
                    </div>                  
                      <a class="btn btn-dark col-lg-11 mt-5" href="article.php">Back to Articale</a>
                    </div>
                    @endforeach
                  </div>
                  </div></a>
                    



</body>

</html>