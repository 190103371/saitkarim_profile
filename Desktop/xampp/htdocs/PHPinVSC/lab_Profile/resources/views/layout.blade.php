<!DOCTYPE html>
<html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal text-white">Profile</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-white" href="/">About</a>
    <a class="p-2 text-white" href="/experience">Experience</a>
    <a class="p-2 text-white" href="/hobbies">Hobbies</a>
  </nav>
  <a class="btn btn-outline-primary" href="/post">Post</a>
</div>

<div class="container">
@yield('main_content')
</div>


</body>
</html>