<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project</title>
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css" />
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
      // include_once("header.php");
      // require_once("connect.php");

      // //connect to database
      // $sql = "SELECT * FROM menu";
      // $stmt = $connect->prepare($sql);
      // $stmt-> execute();
      // $result = $stmt->fetchALL();
    ?>
    <main>
      <div class="container__homepage" id="home">
        <div class="burger__pic">
          <p class="titel">Welkom bij de</p>
          <p class="titel_name">BigSnack</p>
        </div>
      </div>

      <div class="container__about" id="about">
        <div class="txt__about__box">
          <div class="txt__title__about">
            <h2>Title</h2>
          </div>
          <div class="txt__info__about">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod illum
            inventore atque. Placeat quod doloremque natus fugit eligendi
            temporibus cupiditate, at cum, fuga architecto vero, recusandae
            accusantium ipsam iusto possimus beatae quasi. Id vero molestiae aut
            quasi. Officia debitis cupiditate voluptatum illum cumque minima
            laborum provident quasi qui ipsam sed repellat quidem necessitatibus
            dignissimos neque id et error hic laudantium, dolore ipsum! Nobis
            tenetur laboriosam, alias voluptates recusandae doloribus? Incidunt
            fugiat eos illo laboriosam nemo?
          </div>
          <div class="txt__pic__about"></div>
        </div>
        <div class="pic__about__box">
          <div class="pic__about"></div>
          <div class="title__margin__about txt__title__about">
            <h2>Title</h2>
          </div>
          <div class="txt__info__about">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod illum
            inventore atque. Placeat quod doloremque natus fugit eligendi
            temporibus cupiditate, at cum, fuga architecto vero, recusandae
            accusantium ipsam iusto possimus beatae quasi. Id vero molestiae aut
            quasi. Officia debitis cupiditate voluptatum illum cumque minima
            laborum provident quasi qui ipsam sed repellat quidem necessitatibus
            dignissimos neque id et error hic laudantium, dolore ipsum! Nobis
            tenetur laboriosam, alias voluptates recusandae doloribus? Incidunt
            fugiat eos illo laboriosam nemo?
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
            <a href="#gezinszakken friet">Gezinszakken Friet</a>
            <a href="#kipsnacks">Kipsnacks</a>
            <a href="#hamburgers">Hamburgers</a>
            <a href="#kapsalon">Pizza</a>
            <a href="#menus">Menu's</a>
            <a href="#broodjes">Broodjes</a>
            <a href="#durums">Durums</a>
            <a href="#sauzen">Sauzen</a>
            <a href="#ijs">ijs<</a>
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

        <form method="post" action="index.html">
          <label id="label__fullname" for="fullname">Full Name</label>
          <input
            id="input__fullname"
            type="text"
            name="fullname"
            maxlength="25"
            placeholder="First Name"
          />

          <label id="label__email" for="">email</label>
          <input
            id="input__email"
            type="text"
            name="email"
            maxlength=""
            placeholder="Example@gmail.com"
          />

          <label id="label__discription" for="discription"
            >Send A Message</label
          >
          <textarea
            id="input__discription"
            name="discription"
            rows="20"
            placeholder="Write something..."
          ></textarea>
          <input id="click__submit" type="submit" value="submit" />
        </form>
      </div>
      <!--
        laten zien van de database `album`, titels
        <?php
          $sql = "SELECT * FROM album";
          $stmt = $connect->prepare($sql);
          
          $stmt->execute();
          $result = $stmt->fetchALL(); 

          foreach($result as $res)
          {
            echo $res['titel']."<br>4";
          }
        ?>
        -->
    </main>
    <footer></footer>
  </body>
</html>
