 <?php
  $URL_ATUAL= "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($URL_ATUAL == 'localhost/podcast/Admin/ListPodcast.php' || $URL_ATUAL == 'localhost/podcast/Admin/CadPodcast.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/ListConvidados.php' || $URL_ATUAL == 'localhost/podcast/Admin/CadConvidado.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/ListTemas.php' || $URL_ATUAL == 'localhost/podcast/Admin/CadTema.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/CadPodTema.php' || $URL_ATUAL == 'localhost/podcast/Admin/CadPodConv.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/updateConvidado.php' || $URL_ATUAL == 'localhost/podcast/Admin/updateTema.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/UpdatePodcast.php' || $URL_ATUAL == 'localhost/podcast/Admin/Adm.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/ListPodTema.php' || $URL_ATUAL == 'localhost/podcast/Admin/ListPodConv.php'
    || $URL_ATUAL == 'localhost/podcast/Admin/UpdatePodTema.php' || $URL_ATUAL == 'localhost/podcast/Admin/UpdatePodConv.php'){
  echo "<div id='o'>
  <div  id='principal'>
      <div id='div2' >
        <h1><a id='title' class='text-center' href='../Index.php'>Science Talk</a></h1>
        <ul id='designmenu' class='nav nav-pills nav-fill nav-justified' >
          <li class='active3'><a class='nav-item nav-link' href='../Categorias.php'>Categorias</a></li>
          <li class='active2'><a class='nav-item nav-link' href='../Page_About.php'>Quem somos?</a></li>
        </div>
        </ul>
  </div>
</div>
<nav class='navbar navbar-expand-sm bg-dark text-white nav-dark'>
  <ul class='navbar-nav'>

    <a class='navbar-brand' href='ListTemas.php'>Tema</a>

    <a class='navbar-brand' href='ListConvidados.php'>Convidado</a>

    <a class='navbar-brand' href='ListPodcast.php'>Podcast</a>

    <a class='navbar-brand' href='ListPodTema.php'>Podcast_Tema</a>

    <a class='navbar-brand' href='ListPodConv.php'>Podcast_Convidado</a>

    <a class='navbar-brand' href='../Sair.php'>Logoff</a>
  </ul>
</nav>";
  }elseif($URL_ATUAL = 'localhost/podcast/Index.php'){
    echo "<div id='o'>
  <div  id='principal'>
      <div id='div2' >
        <h1><a id='title' class='text-center' href='Index.php'>Science Talk</a></h1>
        <ul id='designmenu' class='nav nav-pills nav-fill nav-justified' >
          <li class='active3'><a class='nav-item nav-link' href='Categorias.php'>Categorias</a></li>
          <li class='active2'><a class='nav-item nav-link' href='Page_About.php'>Quem somos?</a></li>
        </div>
        </ul>
  </div>
</div>
<div id='position'>
  <form method='GET' action='index.php'>
    <input type='text' placeholder='Pesquisar...'  name='pesquisar' >
    <input type='submit' value='ir'>
  </form>
</div>";
  }
?>
