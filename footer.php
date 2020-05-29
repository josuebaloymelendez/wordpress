<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 * @version 1.0
 */

?>
          
    </main> 

    <footer class="site-footer" id="footer_main"  aria-label="Main Site Footer">
        <div class="footer-top">
            <div class="footer-inner">
                <nav id="footer_nav" class="footer-secondary-nav" aria-labelledby="footer_nav_header">
                    <ul class="links-list">
                        <li class="link-item"><a href="" class="active">Inicio</a></li>
                        <li class="link-item"><a href="">Soluciones</a></li>
                        <li class="link-item"><a href="">Servicios IT</a></li>
                        <li class="link-item"><a href="">Nosotros</a></li>
                        <li class="link-item"><a href="">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="footer-middle">
            <div class="footer-inner">
                <div class="school-name footer-title footer-logo logo-replacement">
                    <span class="school-name-inner">Noesist</span>
                </div>

                <div class="footer-subscribe">
                    <form action="">
                        <span class="footer-subscribe-title">Recibe información relevante en tu correo electrónico</span>
                        <div class="footer-subscribe-item">
                            <input type="email" placeholder="Correo Electrónico">
                            <input type="submit" value="Suscribirse">
                        </div>
                    </form>
                </div>

                <div class="footer-phone">
                    <span class="footer-phone-title">Llámanos</span>
                    <span class="footer-phone-block">
                        <a href="tel:+57 3014594482">+57 <strong>3014594482</strong></a>
                        <a href="tel:+57 3014594482">+57 <strong>3118659588</strong></a>
                        <a href="tel:+57 3014594482">+57 <strong>3158537301</strong></a>
                    </span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-inner">
                <span class="footer-copyright"><strong>Noesist</strong> &copy; 2020 Todos los derechos reservados</span>

                <nav id="footer_links" class="footer-secondary-nav" aria-labelledby="footer_nav_header">
                    <ul class="links-list">
                        <li class="link-item"><a href="">Términos y condiciones</a></li>
                        <li class="link-item"><a href="">Política de privacidad</a></li>
                    </ul>
                </nav>

                <nav id="social_links" class="footer-secondary-nav" aria-labelledby="footer_nav_header">
                    <ul class="links-list">
                        <li class="link-item"><a href="" class="icon-only"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21.6,0H2.4A2.407,2.407,0,0,0,0,2.4V21.6A2.407,2.407,0,0,0,2.4,24H21.6A2.407,2.407,0,0,0,24,21.6V2.4A2.407,2.407,0,0,0,21.6,0ZM7.2,20.4H3.6V9.6H7.2ZM5.4,7.56A2.16,2.16,0,1,1,7.56,5.4,2.151,2.151,0,0,1,5.4,7.56Zm15,12.84H16.8V14.04a1.8,1.8,0,0,0-3.6,0V20.4H9.6V9.6h3.6v1.44a3.876,3.876,0,0,1,3-1.68,4.252,4.252,0,0,1,4.2,4.2Z"/></svg></a></li>
                        <li class="link-item"><a href="" class="icon-only"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.269,0H1.731A1.731,1.731,0,0,0,0,1.731V22.269A1.731,1.731,0,0,0,1.731,24H12.821V14.718H9.7V11.086h3.117V8.412c0-3.1,1.893-4.788,4.658-4.788a25.636,25.636,0,0,1,2.795.143v3.24H18.367c-1.5,0-1.8.715-1.8,1.764v2.314h3.6L19.7,14.718H16.571V24h5.7A1.731,1.731,0,0,0,24,22.269V1.73A1.731,1.731,0,0,0,22.269,0Zm0,0" transform="translate(0 0)"/></svg></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    </body>
</html>