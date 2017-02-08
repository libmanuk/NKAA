</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav><table class="nkaafooter"><tr><td><a href="/nkaa/">Notable Kentucky African American (NKAA) Database</a>&nbsp; | &nbsp;<a href="https://ukscrc001.net/nkaa/brochure08.pdf" target="_blank">Download Brochure</a>&nbsp; | &nbsp;<a href="/nkaa/contact">Contact Us</a></td></tr></table><!--<?php echo public_nav_main()->setMaxDepth(0); ?>--></nav>
        <p class="nkaafooter"><table><tr><td style="float:left;border-bottom:0px;"><a href="https://www.uky.edu" target="_blank"><img src="/nkaa/themes/berlin/UKlogo-white_sm.png"/></a><br/><a href="https://libraries.uky.edu" target="_blank">University of Kentucky Libraries</a><br/><a href="http://libraries.uky.edu/lib.php?lib_id=13" target="_blank">Special Collections Research Center</a><br/>Contact: Reinette Jones</td><td style="float:right;border-bottom:0px;"><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></td></tr></table></p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        Berlin.dropDown();
    });
</script>

</body>

</html>
