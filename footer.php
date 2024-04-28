</main>
</div>
<footer id="footer" role="contentinfo">
<?php get_template_part( 'templates_part/modale' ); ?>    
<div id="copyright">
<?php  
 wp_nav_menu ( array (
 'theme_location' => 'footer-menu' ,
 'menu_class' => 'my-footer-menu', 
 ) ); ?> 
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>