<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
    <li><a href="/auth/register">Register</a></li>
  @else
  <li><a href="/produtos">Listagem</a></li>
        <li><a href="/produtos/novo">novo</a></li>
    <li>{{ Auth::user()->name }} </li>
    <li><a href="/auth/logout">Logout</a></li>
  @endif
      </ul>

    </div>
  </nav>

    @yield('conteudo')

  <footer class="footer">
      <p>© Curso de Laravel do Alura.</p>
  </footer>

  </div>
</body>
</html>