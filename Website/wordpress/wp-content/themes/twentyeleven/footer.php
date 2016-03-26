<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
                                 <table class="custom-footer">
                                    <tr>
                                       <td class="custom-footer-content-wrapper">
                                       <table><tr>
                                       <td>
                                          Web Design and Development by <a href="http://www.EdenWebDevelopment.com" title="Eden Web Development" rel="generator">Eden Web Development</a>
                                       </td>
                                       <td class="custom-footer-right">
                                          <a href="mailto:contact@PumpCalculator.com" title="contact@PumpCalculator.com" rel="generator">contact@PumpCalculator.com</a>
                                       </td>
                                       </tr></table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="custom-footer-content-wrapper"><table><tr><td>
                                          <b>Medical Disclaimer:</b> The information contained on the Pump Calculator web site is provided for your general information only. Pump Calculator and Eden Web Development do not give medical advice or engage in the practice of medicine. Pump Calculator and Eden Web Development never recommend particular treatment for specific individuals and always recommend that you consult your physician or local treatment center before pursuing any course of treatment.
                                       </td></tr></table></td>
                                    </tr>
                                    <tr>
                                       <td class="custom-footer-content-wrapper"><table><tr><td>
                                          <b>Copyright &copy; 2010 Eden Web Development:</b> All information and content on this web site is protected by copyright. All rights are reserved. Users are prohibited from modifying, copying, distributing, transmitting, displaying, publishing, selling, licensing, creating derivative works, or using any information available on or through the web site for commercial or public purposes.
                                       </td></tr></table></td>
                                    </tr>
                                 </table>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>