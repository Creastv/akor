<?php
 $display = get_field( 'wylacz_formularz_u_dolu_srony' );
?>
<?php if(!is_singular('lokale') ) : ?>
<?php if( $display == false ) : ?>
<div class="f-form">
    <div class="container">
        <div class="f-form__wrap">
            <div class="header text-center">
                <h2>Zapraszamy do kontaktu</h2>
                <p>Szukasz swojego wymarzonego mieszkania lub domu.
    Skontaktuj się z nami za pośrednictwem formularza kontaktowego,
    oddzwonimy do Ciebie e ciągu 24 godz.</p>
            </div>
            <div class="form__wrap">
                <?php echo do_shortcode('[contact-form-7 id="258d77a" title="Formularz 1"]');?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>