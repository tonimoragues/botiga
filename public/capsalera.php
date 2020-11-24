<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">BOTIGA</a>
<button class="navbar-toggler" type="<bu></bu>tton" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item <?php if ($lag=='cat') {echo 'active';} ?>">
      <a class="nav-link" href="changelang.php?lang=cat">CAT</a>
    </li>
    <li class="nav-item" <?php if ($lag=='es') {echo 'active';} ?>>
      <a class="nav-link" href="changelang.php?lang=es">ES</a>
    </li>
  </ul>
</div>
</nav>
