<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMCM Colleage</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <style>
    .dot {
      height: 5px;
      width: 5px;
      margin-top: 3px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }
    </style>

    <script type="text/javascript" src="/app.js"></script>
    <script type="text/javascript" src="/sorttablejs.js"></script>

   </head>

  <body id="home">

  <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="./index.html">MBA University</a>
        <div class="d-flex">
          @auth
          <a href="" class="nav-link"><img class="rounded-circle shadow-1-strong me-2" src="/storage/{{auth()->user()->user_photo}}" alt="" width="25" height="25" />Welcome {{auth()->user()->name}}</a>
          @else

          @endauth
          
          @auth
          <form action="/logout" method="POST">
          @csrf
          <button type="submit" href="" class="nav-link btn btn-link">Logout</button>
          </form>
          @endauth
        </div>
      </div>
    </nav>

    <section class="px-4 py-3 my-1 text-center">
      <img class="d-block mx-auto mb-2" src="/images/logo.png" alt="" width="250" />
    </section>
    
    {{$content}}
    <div class="bg-dark text-white p-1">
      <footer class="py-3">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a href="/" class="nav-link px-2">Contact</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link px-2">Facebook</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link px-2">Twitter</a>
          </li>
        </ul>
        <p class="text-center">&copy; 2022 Created By su paing soe</p>
      </footer>
    </div>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    <script src="/ckeditor/ckeditor.js"></script>
		<script>ClassicEditor
				.create( document.querySelector( '.editor' ), {
					licenseKey: '',
				} )
				.then( editor => {
					window.editor = editor;
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: p3j8dmrsvycr-msj5c6xctevs' );
					console.error( error );
				} );
		</script>
  </body>
</html>