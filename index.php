<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project</title>
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css"/>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />
    <!--icon website-->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/snackbarlogo.png">
  </head>
  <body>
    <?php
      //include header, connection to database, footer.
      include_once("includes/header.php");
      require_once("includes/connect.php");
      /**
      * @var PDO $connect
      */

      //connect to database
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql);
      $stmt-> execute();
      $result = $stmt->fetchALL();
    ?>
    <main>
      <div class="container__homepage" id="home">
        <div class="margin-burger-pic">

        </div>
        <div class="burger__pic">
          <div class="txt">
            <p class="titel">Welkom bij de</p>
            <p class="titel_name">BigSnack</p>
          </div>
        </div>
      </div>

      <div class="container__about" id="about">
        <div class="txt__about__box">
          <div class="txt__title__about">
            <h2>Welkom</h2>
          </div>
          <div class="txt__info__about">
            Welkom bij de Big Snack. In deze snackbar maken wij voor u het gerecht wat u wilt. 
            <br>
            Bekijk onze menukaart op de volgende pagina om uit te kunnen kiezen uit verschillende gerechten.
          </div>
          <div class="txt__pic__about">
            <img src="https://www.bigsnack.nl/themes/plazafood/images/bs-spaarkaart-bg.png" alt="">
          </div>
        </div>
        <div class="pic__about__box">
          <div class="pic__about">
            <img src="Assets/afbeeldingen/bigsnack.png" alt="">
          </div>
          <div class="title__margin__about txt__title__about">
            <h2>Spaarkaart</h2>
          </div>
          <div class="txt__info__about">
            Sparen bij Big Snack
            <br>
            Vaste klanten van Big Snack profiteren van extra veel voordeel! Met de Big Snack spaarkaart spaar je snel en eenvoudig voor korting.
            <br>
            Hoe kan ik sparen?
            <br>
            Bij besteding van iedere €4,- ontvangt je een stempel op je spaarkaart. Je hebt al een volle spaarkaart bij 24 stempels. Lever je volle spaarkaart vervolgens in bij je lokale Big Snack en ontvang €4,- korting!
          </div>
        </div>
      </div>

      <div class="container__menu" id="menu">
        <div class="div__menu__select">
          <div class="menu__title__catogorie">
            <h2>Categorieën</h2>
          </div>
          <div class="menu__keuze__catogorie">
            <a href="#snacks">Snacks</a>
            <a href="#friet">Friet</a>
            <a href="#waterfiets">Waterfiets</a>
            <a href="#gezinszakkenfriet friet">Gezinszakken Friet</a>
            <a href="#kipsnacks">Kipsnacks</a>
            <a href="#hamburgers">Hamburgers</a>
            <a href="#pizza">Pizza</a>
            <a href="#menus">Menu's</a>
            <a href="#menus">Broodjes</a>
            <a href="#durums">Durums</a>
            <a href="#sauzen">Sauzen</a>
            <a href="#ijs">ijs</a>
            <a href="#milkshake">Milkshakes</a>
            <a href="#dranken">Dranken</a>
          </div>
        </div>

        <div class="div__scroll__food">
          <div class="title__menu">
            <h2>Menu Kaart</h2>
          </div>
          <section id="snacks">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "snacks"){
                  ?>
                  <div class="product">
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie snacks">
                    <p id="naam__frikandel"><?php echo $res["product_name"]?></p>
                    <p id="prijs__frikandel"><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="friet">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "friet"){
                  ?>
                  <div class="product">
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie friet">
                    <p id="naam__frikandel"><?php echo $res["product_name"]?></p>
                    <p id="prijs__frikandel"><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="waterfiets">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "waterfiets"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie waterfiets">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="gezinszakkenfriet">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "gezinszak friet"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie gezinszak friet">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="kipsnacks">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "kipsnacks"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie kipsnacks">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="hamburgers">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "hamburgers"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie hamburgers">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="pizza">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "pizza"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie pizza's">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="menus">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "menus"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie menu's">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="broodjes">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "broodjes"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie pizza's">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="durums">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "durums"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie pizza's">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="sauzen">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "sauzen"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie pizza's">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="ijs">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "ijs"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie ijs">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="milkshake">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "milkshake"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie milkshake">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
          <section id="dranken">
            <?php 
              foreach($result as $res){
                if($res["categorie"] == "dranken"){
                  ?>               
                  <div class="product">                     
                    <img src="<?php echo $res["picture"]?>" alt="alle foto's van de categorie dranken">
                    <p><?php echo $res["product_name"]?></p>
                    <p><?php echo $res["prijs"]?></p>
                    <img src="Assets/afbeeldingen/shoppingCart.png" class="shoppingCart" alt="shopping Cart icon">
                  </div>
                  <?php
                }
                ?>
                <?php
              }
            ?>
          </section>
        </div>
      </div>

      <div class="container__contact" id="contact">
        <h2>Contact Us</h2>

        <form method="post" id="form">
          <label id="label__fullname" for="fullname">Full Name</label>
          <input
            id="input__fullname"
            type="text"
            name="fullname"
            maxlength=""
            placeholder="First Name"
            required
          />

          <label id="label__email" for="">email</label>
          <input
            id="input__email"
            type="text"
            name="email"
            maxlength=""
            placeholder="Example@gmail.com"
            required
          />

          <label id="label__discription" for="discription"
            >Send A Message</label
          >
          <textarea
            id="input__discription"
            name="discription"
            rows="20"
            placeholder="Write something..."
            required
          ></textarea>
          <input id="click__submit" type="submit" value="submit" />
        </form>
      </div>

      <?php
        include_once("includes/footer.php");
      ?>
    </main>
    <!--link submit_contact, to use .ajax-->
    <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
    </script>
    <script src="JS/submit_contact.js"></script>
  </body>
</html>