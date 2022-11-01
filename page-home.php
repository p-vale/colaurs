<?php get_header(); ?>
<main>
    <div class="hero">
        <p id="home-description"><?php bloginfo( 'description' ); ?></p>
        <!-- <img src="" alt="" class="hero-img"> -->
    </div>
    <div class="info">
        <div>
            <h3>A CULTURAL KALEIDOSCOPE</h3>
            <P>Description</P>
        </div>
        <form action="" class="contact-form">
            <h3>GET IN TOUCH</h3>
            <fieldset>
                <label for="fname">name</label>
                <input type="text" id="fname" name="fname" placeholder="John Doe">
            </fieldset>
            <fieldset>
                <label for="email">email</label>
                <input type="email" id="email" name="email" placeholder="john@email.com">
            </fieldset>
            <fieldset>
                <label for="msg">message</label>
                <textarea id="msg" name="msg" placeholder="Your message"></textarea>
            </fieldset>
            <input type="submit" value="submit">
        </form>
    </div>
</main>
<?php get_footer(); ?>