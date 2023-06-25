<script>
$(document).ready(function(){
		if (window.innerWidth < 992) {
			// no sidebar
			<?php
			$component = new OssnComponents;
			$settings = $component->getComSettings('HtmlSidebar');
			if ($settings && $settings->mobile_sidebar == 'on') {
			?>
				var htmlSidebar = <?php echo json_encode(ossn_plugin_view('htmlsidebar/contents'));?>;
				$('.newsfeed-middle .ossn-wall-container').prepend(htmlSidebar);
			<?php
			}
			?>
		} else {
			var htmlSidebar = <?php echo json_encode(ossn_plugin_view('htmlsidebar/contents'));?>;
			$('.newsfeed-right').prepend(htmlSidebar);
		}
});
</script>