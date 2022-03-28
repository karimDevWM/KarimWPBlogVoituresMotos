<?php 
/*
Template Name: Contact
*/
    get_header();
	get_template_part('template-parts/navigation');
    
?>
<div class="container mt-5">
    <section class="mt-5">

        <h2 class="h1-responsive font-weight-bold text-center my-4"><?= the_title(); ?></h2>
    
        <p><?= the_content(); ?></p>

        <p class="text-center w-responsive mx-auto mb-5">

        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Votre Nom</label>
                            </div>
                        </div>
                
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Votre mail</label>
                            </div>
                        </div>
                    

                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Sujet</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Votre message</label>
                            </div>

                        </div>
                    </div>

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer votre message</a>
                </div>
                <div class="status"></div>
            </div>
        </div>

    </section>
</div>
<footer style="margin-top: 200px;">
<?php get_footer(); ?>
</footer>
