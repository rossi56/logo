<?php ob_start() ?>
    <main>
        <div class="cd-popup contact" role="alert">
            <form method='post' action='Contact' name="contactform" id="contactform" class="contact-form">
                <div class="cd-popup-container">
                    <p>
                        <a href="" class="cd-popup-close cd-close-button">
                            <i class="fa fa-times" style="pointer-events:none;"></i>
                        </a>
                    </p>

                    <div class="name">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="nom" value='<?php if(isset($_POST["nom"])) echo $_POST["nom"] ?>' />
                    </div>
                    <div class="email">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>" />
                    </div>
                    <div class="message">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" name="texte"><?php if(isset($_POST["texte"])) echo $_POST["texte"] ?></textarea>
                    </div>
                    <br>
                    <div class="submit">
                        <p class="user-message" id="contactMessage">Ecrivez-nous !</p>
                        <input type="submit" name="submit" id="submit" value="Envoyer" />
                    </div>
                </div>
            </form>
        </div>

        <div class="cd-popup notification" role="alert">
            <div class="cd-popup-container">
                <a href="" class="cd-popup-close cd-close-button">
                    <i class="fa fa-times" style="pointer-events:none;"></i>
                </a>
                <p>
                    <h3 id="notification-text"></h3>
                </p>
            </div>
        </div>
       
        <section id="team">
                <h2>La Team</h2>
            <figure>
                <img src="https://picsum.photos/200/200/?random" alt="">
                <figcaption>
                    Sébastien Champalaune
                    <br> 39 ans
                </figcaption>
            </figure>
            <figure>
                <img src="https://picsum.photos/200/200/?random" alt="">
                <figcaption>
                    Sébastien Champalaune
                    <br> 39 ans
                </figcaption>
            </figure>
            <figure>
                <img src="https://picsum.photos/200/200/?random" alt="">
                <figcaption>
                    Sébastien Champalaune
                    <br> 39 ans
                </figcaption>
            </figure>
        </section>
     
        <section id="story">
                <h2>La Story</h2>
            <article>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo officia pariatur sequi perspiciatis debitis. Exercitationem
                    deserunt tempore tenetur quia nisi? Nostrum iure ipsa veritatis exercitationem earum aperiam, sint nam
                    mollitia! Cupiditate sint, repellat illo autem voluptas veritatis, cumque fuga saepe placeat beatae ducimus,
                    facere odio architecto eius natus. Nam, sapiente animi. Beatae cupiditate voluptates magni distinctio,
                    inventore porro fugiat corrupti? Ipsa aliquam cupiditate quae excepturi, quia amet recusandae illum rem
                    harum atque non error voluptatem quidem architecto perspiciatis veniam animi! Aliquid deleniti reprehenderit
                    ex quaerat asperiores ut accusamus nesciunt pariatur. Consectetur ullam adipisci, laborum quaerat expedita
                    nesciunt officiis nihil voluptate quibusdam impedit ex asperiores quia facilis perferendis quo saepe
                    fuga odio at. Corrupti, delectus incidunt repudiandae tenetur illum distinctio ullam. Soluta, atque nemo
                    ratione error quod excepturi laborum minima ea deserunt veritatis, deleniti, voluptates delectus necessitatibus
                    similique consequuntur obcaecati molestias commodi debitis quia? Expedita, inventore qui ducimus id deserunt
                   
                </p>
            </article>
        </section>
      
        <section id="spirit">
                <h2>Spirit</h2>
            <article>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi nam expedita minima hic iusto provident dicta aut, et
                    reiciendis sit sint perferendis quisquam voluptates corrupti quibusdam consectetur labore reprehenderit.Repellat
                    rem sunt minima laboriosam odit modi rerum quasi officia velit vero quisquam molestias dolorem adipisci
                    accusamus asperiores, iusto voluptatibus pariatur harum. Ab alias in, maxime numquam officia totam deserunt?
                </p>
            </article>
        </section>
      
        <section id="work">
                <h2>Nos Réalisations</h2>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="https://picsum.photos/200/200/?random" alt="">
                    <a href=""></a>
                </figure>
            </article>
        </section>
        <div class="scrollTop">
            <i class="fas fa-angle-double-up "></i>
        </div>
    </main>

<?php $content = ob_get_clean(); ?>
<?php require('templates/template.php'); ?>
