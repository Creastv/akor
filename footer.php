</div>
</div>
</main>
<?php get_template_part('templates-parts/parts/posts'); ?>

<?php get_template_part('templates-parts/footer/footer', 'form'); ?>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
            <hr>
            <div class="f__main__wraper ">
                 <div class="col">
                    <?php get_template_part('templates-parts/footer/footer', 'company'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
                </div>
                <div class="col">
                    <?php get_template_part('templates-parts/footer/footer', 'socialmedia'); ?>
                    <?php get_template_part('templates-parts/footer/footer', 'img'); ?>
                </div>
            </div>
            <hr>
            <div class="f__info__wraper ">
                <div class="col"><?php get_template_part('templates-parts/footer/footer', 'info'); ?>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>

<?php wp_footer(); ?>
<script>
const img = document.querySelectorAll(".wp-block-gallery .wp-block-image a");

for(let i=0; i < img.length; i++){
    img[i].setAttribute('data-fancybox', 'wp-gallery-fancybox');
}

</script>
</body>
</html>