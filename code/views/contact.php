<!DOCTYPE html>
<!-- Hugo Le Noë TD 3 firefox -->
<html>
    <head>
        <title>Page de présentation</title>
        <link rel="stylesheet" href="../public/css/style.css">
        <script src="../public/js/script.js" ></script>
    </head>
    <body>
        <header>
            <article>
                <h3><span style="font-size: 40px;" > My Service</span> Slogan </h3>
            </article>  
            <nav>   
                <article>
                    <h3> <a href="../public/index.php"> Home </a></h3>
                    
                </article>       
                <article>
                    <h3>About</h3>
                    
                </article>
                <article>
                    <h3>Contact Us </h3>
                    
                </article>
                <article onclick="showLogin()">
                    <h3  >Connect</h3>
                </article>
                <article onclick="showSignUp()">
                    <h3  >SignUp</h3>
                </article>
                <article>
                    <a href="../views/quiz.php"> <h3>Quiz</h3></a>
                </article>
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
            <section id="contactUs" >
                <h3>Contact Us</h3>
                <form action="" class="formContact">
                    
                    <label for="Nom">Nom</label>
                    <input type="text" label="Nom">
                    
                    <label for="Nom">Prénom</label>
                    <input type="text" label="Prénom">

                    <label for="Nom">Mail</label>
                    <input type="text" label="Mail">

                    <label for="Nom">Objet</label>
                    <input type="text" label="Objet">

                    <label for="Nom">Message</label>
                    <textarea name="message" id="" cols="30" rows="10">
                    </textarea>

                    <input type="submit" name="" id="">

                </form>
            </section>   
            
            
        <!-- Formulaire de connexion -->
        <div id="connexion">
            <section >
                <h3 >Login</h3>
                <form action="">
                    
                    <label for="name">Username :</label> <br>
                    <input type="text" id="username" name="username" placeholder="Insert username here ..." /> <br>
                        
                    <label for="password">Password :</label> <br>
                    <input type="password" id="password" name="password" placeholder="Insert password here" /> <br>

                    <a href="../views/mdpOublie.php">Mot de passe oublié</a> <br>

                    <input type="submit" value="Log in">
                </form>
            </section>
        </div>


        <!-- Formulaire de création de compte -->
        <div id="creationCompte">
            <section >
                <h3 >Sign up</h3>
                <form action="">
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
    </body>
</html>