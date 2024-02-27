<footer class="footer">
    <!--footer-section-->
    <div class="container-fluid">
        <div class="footer-bg">
            <div class="container">
                <div class="footer-contacts">
                    <div class="footer-box">
                        <a href="tel:77760676600" class="contacts-link">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt="" class="contacts-link__img">
                            <p class="contacts-link__text">+7 (776) 067-66-00</p>
                        </a>
                        <a href="tel:77018777785" class="contacts-link">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt="" class="contacts-link__img">
                            <p class="contacts-link__text">+7 (701) 877-77-85</p>
                        </a>
                    </div>

                    <a href="mailto:sales@kssi.kz" class="contacts-link">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mail-icon.png" alt="" class="contacts-link__img">
                        <p class="contacts-link__text">sales@kssi.kz</p>
                    </a>
                </div>
                <div class="footer-wrapper">
                    <div class="footer-copyright">
                        <p class="footer-copyright__text">© KSSI Construction</p>
                        <p class="footer-copyright__subtext">Строительство жилой и коммерческой недвижимости</p>
                    </div>
                    <div class="footer-logo">
                        <a  href="" class="yandex-logo">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/metrika.jpg" alt="" class="yandex-logo__img">
                        </a>
                        <a href="https://zdesign.kz/" class="zdesign-block">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer-zdesign.png" alt="" class="zdesign-block__img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="menu-backdrop"></div>
<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="fffa9f7" title="Форма звонка"]'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Поиск по сайту</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php wp_footer(); ?>