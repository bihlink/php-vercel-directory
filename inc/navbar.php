<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= $rooturl; ?>" title="<?= $seotitle; ?>"><img src="https://video.bihlink.com/img/bihlink-logo-small.png" alt="<?= $seotitle; ?>" height="34"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" action="<?= $rooturl; ?>/search/">
        <input class="form-control me-2 d-lg-none d-sm-block d-sm-block" type="search" placeholder="Traži Video" aria-label="Search" name="q" value="<?php if($q !=="") { echo $qt; } ?>">
        <button class="btn btn-secondary d-lg-none d-sm-block d-sm-block" type="submit">Traži</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="https://bihlink.com"><i class="bi bi-house"></i> Početna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $rooturl; ?>"><i class="bi bi-play-btn"></i> Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $rooturl; ?>/trending/"><i class="bi bi-lightning-charge"></i> U Trendu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $rooturl; ?>/channels/"><i class="bi bi-star"></i> Izdvojeni Kanali</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-info-circle"></i> Info
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">O BiH Link-u</a></li>
            <li><a class="dropdown-item" href="#">Socijalna Mreza</a></li>
            <li><a class="dropdown-item" href="#">Promocija Videa</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='https://coki.me/donate' target='_blank'><i class="bi bi-heart"></i> Donirajte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='https://tuby.me' target='_blank'><i class="bi bi-box-arrow-up-right"></i> English</a>
        </li>
      </ul>
      <form class="d-flex" action="<?= $rooturl; ?>/search/">
        <input class="form-control me-2 d-none d-lg-block" type="search" placeholder="Traži Video" aria-label="Search" name="q" value="<?php if(isset($q)) { echo $qt; } ?>">
        <button class="btn btn-secondary d-none d-lg-block" type="submit">Traži</button>
      </form>
      <div class="ms-2">
        <label><input type="checkbox" id="lightSwitch"><span class="label" title="Switch Light Mode"><i class="bi bi-brightness-high-fill"></i></span></label>
        <script src="<?= $rooturl; ?>/inc/lightswitch.js"/></script>
      </div>
      <!--<a class="btn btn-warning ms-md-3" href="#" role="button">Submit Video</a>-->
    </div>
  </div>
</nav>
