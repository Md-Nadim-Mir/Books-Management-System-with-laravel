<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8832/8832880.png" type="image/x-icon">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg py-4" style="background-color: #CFE2FF ; font-weight: bolder" >
      <div class="container">
       <div class="items-center">
            <img class="mr-4" style="width: 36px;" src="https://cdn-icons-png.flaticon.com/512/8832/8832880.png" alt="">
            <a class="navbar-brand text-primary" href="http://127.0.0.1:8000">Books Management System</a>
       </div>
          <form class="d-flex" role="search" method="get" action="{{route('books.search')}}">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-primary text-white" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>