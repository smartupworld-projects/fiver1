<div class="o-wrapper">
    <section class="c-subscribe">
        <div class="c-subscribe__content">
            <h1 class="c-subscribe__heading">Subscribe for updates</h1>
            <p class="c-subscribe__description">
            </p>
        </div>
        <div class="c-subscribe__form-wrapper">
            <div id="newsletterForm">
                <form action="/api/NewsletterSubscribe" class="c-subscribe__form" data-ajax="true" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#newsletterForm" id="form0" method="post">
                    <input name="__RequestVerificationToken" type="hidden" value="8sEKFed9jWK8bd-REApPN7NUTTgwxyGs5HEZR0bp1YMfgemF3sPxMSr4Qitf8VmvFud8zye0TBnJ3YQ_7PKli5gJzGDxs53VS497qOD0e4M1" />
                    <input type="email" class="c-subscribe__input" placeholder="E-mail" name="email" />
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_name" tabindex="-1" value="">
                    </div>
                    <div class="c-subscribe__button">
                        <button type="submit" class="c-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<footer class="c-site-footer">
    <div class="o-wrapper o-wrapper--padded">
        <div class="o-grid">
            <div class="o-grid__item u-1/3 u-1/2@phablet u-1/1@palm">
                <div class="c-site-footer__heading">
                    About this site
                </div>
                <ul class="c-link-list c-link-list--footer">
                    <li class="c-link-list__item"><a href="/en/Website-Information/Copyright-Information/">Copyright and Disclaimer</a></li>
                    <li class="c-link-list__item"><a href="/en/Website-Information/Terms-of-use/">Terms of Use</a></li>
                    <li class="c-link-list__item"><a href="/en/Website-Information/Glossary/">Glossary</a></li>
                </ul>

            </div>

            <div class="o-grid__item u-1/3 u-1/2@phablet u-1/1@palm">
                <div class="c-site-footer__heading">
                    GWP Sites
                </div>
                <ul class="c-link-list c-link-list--footer">
                    <li class="c-link-list__item"><a href="/en/GWP-Caribbean/">Caribbean</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-Central-Africa/">Central Africa</a></li>
                    <li class="c-link-list__item"><a href="/es/GWP-Centroamerica/">Central America</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-CEE/">Central and Eastern Europe</a></li>
                    <li class="c-link-list__item"><a href="/en/CACENA/" title="CACENA">Central Asia and Caucasus</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-China/">China</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-Eastern-Africa/">Eastern Africa</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-Mediterranean/">Mediterranean</a></li>
                    <li class="c-link-list__item"><a href="/es/GWP-Sud-America/">South America</a></li>
                    <li class="c-link-list__item"><a href="/en/gwp-SAS/">South Asia</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-South-East-Asia/">South East Asia</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-SouthernAfrica/">Southern Africa</a></li>
                    <li class="c-link-list__item"><a href="/en/GWP-West-Africa/">West Africa</a></li>
                </ul>

            </div>

            <div class="o-grid__item u-1/3 u-1/1@phablet">
                <div class="c-site-footer__heading">
                    Contact us
                </div>
                <div class="c-site-footer__text">
                    <p>Postal address:</p>
                    <p>PO Box 24177, SE-104 51<br>Stockholm, Sweden</p>
                    <p>Visitor address:</p>
                    <p>Linn�gatan 87D</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo Get_template_directory_uri(); ?>/scripts/core.js" defer></script>
<script src="<?php echo Get_template_directory_uri(); ?>/scripts/app.js" defer></script>
<?php wp_footer(); ?>
</body>

</html>