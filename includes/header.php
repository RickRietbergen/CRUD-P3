<header>
  <div class="header">
    <nav>
      <li>
        <?php
            if(isset($page)) {
              ?>
                <a href="index.php"
                ><img
                  class="snackbar__logo"
                  src="Assets/afbeeldingen/snackbarlogo.png"
                  alt="logo__link__to__home"
                /></a>
        <?php
            } 
            else {
              ?>
                <a href="#home"
                ><img
                  class="snackbar__logo"
                  src="Assets/afbeeldingen/snackbarlogo.png"
                  alt="logo__link__to__home"
                /></a>
        <?php
            }
        ?>
        <ul class="ul1">
          <a href="#home" class="header-none">home</a>
        </ul>
        <ul>
          <a href="#about" class="header-none">about us</a>
        </ul>
        <ul>
          <a href="#menu" class="header-none">menu</a>
        </ul>
        <ul>
          <a href="#contact" class="header-none">contact us</a>
        </ul>
      </li>
    </nav>
  </div>
</header>
