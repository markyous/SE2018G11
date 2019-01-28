3<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background-image: url(img/home.jpg);
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="js/richtext.min.css">
    <script src="js/jquery.richtext.js"></script>
    <script>
      $(document).ready(function(){
          $("#community").click(function(){
          if(!$("#question").val()){
            var warning = $("<div class='mt-2 alert alert-danger' role='alert'>You should put a question</div>");
            $("#specialist").after(warning);
            warning.slideUp(2000);
            return false;
          }
          return true;
        });
        $(".comment").click(function(){
          var comment= $("<hr class='lead'><div class='input-group my-1'><div class='input-group-prepend'><span class='input-group-text'>Your comment</span></div><textarea class='form-control' aria-label='With textarea'></textarea></div><button class='btn btn-light float-right' type='button' ><img src='img/send.png'></button>");
          if($(".divC").children().length==0){
            $(this).parents(".rowC").next(".formC").children().append(comment);
            $(".divC").slideDown();
          }
          else if($(".divC")) {
            $(".divC").slideUp();
            $(".divC").children().remove();
          }
        });
        $('.post').richText();
      });
    </script>
  </head>
  <body >


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <img class="mr-2" src="img/logo.png" width="40 px"  height="35 px"/>
      <a class="navbar-brand" href="#"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li>
            <div class="input-group ml-5 my-2 my-lg-0">
              <input class="form-control" type="search" placeholder="Search for questions" aria-label="Search" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2"><img src="img/search.png" width="20px"></button>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav mr-5 ">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" data-whatever="@getbootstrap">Ask a question ?</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><img src="img/notification.png" width="30px" data-toggle="tooltip" data-placement="bottom" title="notifications" style="position:relative;"></span>
                <span style="position:absolute; top:6px; right:0px;" class="badge badge-danger">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><B>Omar Hesham</B> commented on your post</a>
              <a class="dropdown-item" href="#"><B>Omar alam</B> commented on your post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><img src="img/bookmarks.png" width="30px" data-toggle="tooltip" data-placement="bottom" title="bookmarks" style="position:relative;"></span>
                <span style="position:absolute; top:6px; right:0px;" class="badge badge-danger">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Omar Hesham commented on your post</a>
              <a class="dropdown-item" href="#">log out</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/profile.png" width="30 px"  height="30 px" alt=""><span> Martin </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">My profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav><br><br><br>
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your question</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="input-group">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">programming languages</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option >Choose...</option>
                  <option value="1">C/C++</option>
                  <option value="2">java</option>
                  <option value="3">python</option>
                </select>
              </div>
              <div class="input-group mb-3">
              <textarea id="question" class="form-control post" aria-label="With textarea" ></textarea>
              </div>
              <button id="community" type="submit" class="btn btn-primary">Ask community</button>
              <button id="specialist" type="submit" class="btn btn-outline-primary">Ask specialist</button><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <div class="container">
          <div class="card mb-3">
            <div class="card-header">
              java
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <hr>
              <div class="row rowC">
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">  Answers</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block comment"  ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <form class="formC" action="index.html" method="post">
                <div class="divC"></div>
              </form>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              java
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <hr>
              <div class="row rowC">
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/answer.png" width="20px">  Answers</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block comment"  ><img src="img/comment.png" width="20px">  Comment</button>
                </div>
                <div class="col-lg-4">
                  <button type="button" class="btn btn-light btn-lg btn-block"><img src="img/bookmark2.png" width="20px">  Bookmark</button>
                </div>
              </div>
              <form class="formC" action="index.html" method="post">
                <div class="divC"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="container">
          <div class="jumbotron">
            <img class="mr-2" src="img/logo.png" width="60 px"  height="50 px"/>
            <span style="font-size:35px; font-weight:bold;"><span style="color:#5f6bdd;">C</span>ode<span style="color:#5f6bdd;">G</span>uide</span>
            <h4 class="lead">Filter posts by:</h4>
            <div class="row">
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/c++.png" width="70px"><br>C++</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/csharp.png" width="70px"><br>C#</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/java.png" width="70px"><br>java</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/python.png" width="70px"><br>python</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/html.png" width="70px"><br>HTML</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/css.png" width="70px"><br>CSS</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/javascript.png" width="70px"><br>javascript</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/jquery.png" width="70px"><br>jquery</button>
              </div>
              <div class="col-lg-4">
                <button type="button" class="btn btn-outline-dark mb-2"><img src="img/php.png" width="70px"><br>php</button>
              </div>
            </div>
            <hr class="lead">
            <h4 class="lead">Recent posts:</h4>
            <div class="card mb-3">
              <div class="card-header">
                java
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Answers</a>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                C/C++
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Answers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>