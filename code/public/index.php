
<!DOCTYPE html>
<!-- Hugo Le Noë TD 3 firefox -->
<?php
    session_start();
?>  
<html>
    <head>
        <title>Page de présentation</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/script.js" ></script>
    </head>
    <body>
        <header>
            <article>
                <h3><span style="font-size: 40px;" > My Service</span> Slogan </h3>
            </article>  
            <nav>   
                <article>
                    <h3>Home</h3>
                    
                </article>       
                <article>
                    <h3>About</h3>
                    
                </article>
                <article>
                    <h3> <a href="../views/contact.php"> Contact Us </a> </h3>
                    
                </article>
                <article>
                    <h3> <a href="../views/quiz.php">Quizz</a></h3>
                </article>

                <div>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <h3> Bienvenue <?php echo $_SESSION['username']; 
                    ?> </h3>
                    <?php } 
                    else {
                    ?>

                    <article onclick="showLogin()">
                        <h3>Connect</h3>
                    </article>
                    <article onclick="showSignUp()">
                        <h3 >SignUp</h3>
                    </article>
                    <?php } ?>
                </div>
            </nav>
        </header>
        <nav id="topNav">
            <section>
                <h3>Home</h3>
                <h1>My Service</h1>
                <h3>Ecrivez ce que vous voulez</h3>
            </section>
        </nav>
        <main>
            
            <section id="evenement">
                <article class="evenementDesc">
                    <h4>
                        Evènement à venir 
                    </h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <button>
                        Voir plus
                    </button>
                </article>
                <article class="carouselArticle">
                    <button class="leftBtn">
                        <
                    </button>
                    <div>
                        <span>Lire article</span>
                    </div>
                    <div>
                        <span>Lire article</span>
                    </div>
                    <div>
                        <span>Lire article</span>
                    </div>
                    <button class="rightBtn">
                        >
                    </button>
                </article>
            </section>
            <hr size="7px" color="#e46308" width="80%" />
            <section id="service">
                <article>
                    <h4>
                        Explorez nos services
                    </h4>
                </article>
                <article>
                    <div class="cyber">
                        <img src="./img/firewall.jpeg" alt="" width="70px">
                        <h5 >
                            Cybersécurité
                        </h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </article>
                <article>
                    <div class="ia">
                        <img src="./img/robot.jpeg" alt="" width="70px">
                        <h5 >
                            IA
                        </h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </article>
            </section>
            <hr size="7px" color="#e46308" width="80%" />
            <section id="client">
                <article class="article">
                    <h5>Articles similaire</h5>
                    <div>
                        <h6>Titre 1</h6>
                        <ul>
                            <li>Mercredi 3 Mars</li>
                            <li>Rédiger par : Michel</li>
                            <li>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </li>
                        </ul>
                    </div>
                    <hr size="3px" color="black" style="margin-top: 0px;" />

                    <div>
                        <h6>Titre 1</h6>
                        <ul>
                            <li>Mercredi 3 Mars</li>
                            <li>Rédiger par : Michel</li>
                            <li>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="avis">   
                    <h5>Avis de nos clients</h5>
                    <aside>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                            <div class="userAvis">
                                <img src="./img//mario.jpeg" alt="" width="60px">
                                Mario
                            </div>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                            <div class="userAvis">
                                <img src="./img/images.png" alt="" width="60px">
                                Elizabeth
                            </div>
                        </div>
                    </aside>
                </article>
            </section>
            <footer>
                <article>
                    <h3><span style="font-size: 40px;" > My Service</span> Slogan </h3>
                </article>
                <section>
                    <article>
                        <h5>Navigation</h5>
                        <ul>
                            <li>
                                Home
                            </li>
                            <li>
                                About
                            </li>
                            <li>
                                Contact Us
                            </li>
                            <li>
                                Connect
                            </li>
                        </ul>
                        
                    </article>
                    <article>
                        <h5>Partenaires</h5>
                        <ul>
                            <li>
                                Lien partenaire 1
                            </li>
                            <li>
                                Lien partenaire 2
                            </li>
                            <li>
                                Lien partenaire 3
                            </li>
                        </ul>
                    </article>
                    <article>
                        <h5>Contact</h5>
                        <p>
                            00 Avenue Road 56000 Vannes France
                        </p>
                    </article>
                </section>
                <hr style="margin-bottom: 2px;" size="4px" color="#e46308" width="95%" />
                <section class="terme">
                        <p>by somenone something. No rigth reserved</p>

                        <p> Term of service</p>
                </section>
            </footer>
        </main>

        <!-- Formulaire de connexion -->
        <div id="connexion">
            <section >
                <h3 >Login</h3>
                <form  method="POST" action="../controller/registerController.php">
                    
                    <label for="name">Username :</label> <br>
                    <input type="text" id="username" name="username" placeholder="Insert username here ..." /> <br>
                        
                    <label for="password">Password :</label> <br>
                    <input type="password" id="password" name="password" placeholder="Insert password here" /> <br>

                    <a href="#">Mot de passe oublié</a> <br>

                    <input type="submit" value="Log in">
                </form>
            </section>
        </div>


        <!-- Formulaire de création de compte -->
        <div id="creationCompte">
            <section >
                <h3 >Sign up</h3>
                <form method="POST" action="../controller/registerController.php">
                    <label for="name">Nom :</label> <br>
                    <input type="text" id="nom" name="nom" placeholder="Insert Name here ..." /> <br>

                    <label for="name">Prenom :</label> <br>
                    <input type="text" id="prenom" name="prenom" placeholder="Insert prénom here ..." /> <br>
                    
                    <label for="name">Username :</label> <br>
                    <input type="text" id="usernameSignup" name="usernameSignup" placeholder="Insert username here ..." /> <br>
                    
                    <label for="password"  >Password :</label> <br>
                    <input type="password" id="passwordSignup"  name="passwordSignup" placeholder="Insert password here" /> <br>
                    <p id="taillePass" style="display: none;" >Mot de passe non conforme (taille > 8)</p>
                    
                    <label for="password">Vérif password :</label> <br>
                    <input type="password" id="verifPassword" name="verifPassword" placeholder="Insert password here" /> <br>
                    <p id="diff" style="display: none;">Les mots de passes ne sont pas identiques</p>
                    <p id="notDiff" style="display: none;">Mots de passe identiques</p>
                    <input type="submit" value="Sign up">
                </form>
            </section>
        </div>

        

    <script>
        
    </script>
    </body>
    <script>
        var error = <?php echo $_SESSION['error']; if (isset($_SESSION['error'])) { unset($_SESSION['error']); } else { echo -1; } ?>;
        if (error == 0) {
            alert("Les mots de passes ne sont pas identiques");
        }
        else if (error == 1) {
            alert("Mot de passe non conforme");
        }
        else if (error == 2) {
            alert("Erreur lors de l'insertion de l'utilisateur");
        }
    </script>
</html>

