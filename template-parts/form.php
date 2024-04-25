<section class="contact-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/background-form.png)">
    <div class='contact-container'>
        <h3>Envíanos un mensaje</h3>
        <form class="form">
            <div class="id">
                <div class="name">
                    <label for="name">Nombre</label>
                    <input id="name" type="text" name="name">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email">
                </div>
            </div>
            <div class="id">
                <div class="phone">
                    <label for="phone">Teléfono</label>
                    <input id="phone" type="text" name="phone">
                </div>
                <div class="company">
                    <label for="company">Empresa</label>
                    <input id="company" type="text" name="company">
                </div>
            </div>
            <div class="subject">
                <label for="subject">Dirección</label>

                <input id="subject" type="text" name="subject">
            </div>
            <div class="content">
                <label id="contect" for="content">Mensaje</label>

                <textarea name="content" id="" cols="30" rows="10"></textarea>
                <button type="submit">Enviar</button>

            </div>
        </form>
    </div>
</section>