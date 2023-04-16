<div class="container-fluid bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="images/logo.png">
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navmenu"
          aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        </button>
        <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-md-auto">
            <li class="nav-item">
              <a class="nav-link <?= ($activePage == 'Home') ? 'active' : ''; ?>" href="index">Home |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= ($activePage == 'Over ons') ? 'active' : ''; ?>" href="over_ons">Over ons |</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" <?= ($activePage == 'Documenten') ? 'active' : ''; ?> href="Documenten">Documenten
                |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" <?= ($activePage == 'Contact') ? 'active' : ''; ?> href="contact">Contact</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>