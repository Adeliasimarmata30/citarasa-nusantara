<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php
	astra_content_after();

	astra_footer_before();

	astra_footer();

	astra_footer_after();
?>
	</div><!-- #page -->
<?php
	astra_body_bottom();
	wp_footer();
?>

<!-- Tambahan overlay "Sumber: Pinterest" kecuali gambar admin bar dan tanpa mengubah ukuran -->
<style>
.img-overlay-text {
  position: absolute;
  bottom: 8px;
  right: 8px;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  font-size: 12px;
  font-family: sans-serif;
  padding: 4px 8px;
  border-radius: 4px;
  pointer-events: none;
  z-index: 2;
}
.img-wrapper-relative {
  position: relative;
  display: inline-block;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const allImages = document.querySelectorAll("img");

  allImages.forEach(function (img) {
    const insideAdminBar = img.closest('#wpadminbar');

    if (!insideAdminBar && !img.closest('.img-wrapper-relative')) {
      const wrapper = document.createElement("span");
      wrapper.className = "img-wrapper-relative";
      img.parentNode.insertBefore(wrapper, img);
      wrapper.appendChild(img);

      const label = document.createElement("div");
      label.className = "img-overlay-text";
      label.innerText = "Sumber: Pinterest";
      wrapper.appendChild(label);
    }
  });
});
</script>


</body>
</html>
