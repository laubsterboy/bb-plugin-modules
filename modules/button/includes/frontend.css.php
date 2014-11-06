<?php

if(!empty($settings->bg_color)) {
	$bg_grad_start = FLBuilderColor::adjust_brightness($settings->bg_color, 30, 'lighten');
	$border_color = FLBuilderColor::adjust_brightness($settings->bg_color, 12, 'darken');
}
if(!empty($settings->bg_hover_color)) {
    $bg_hover_grad_start = FLBuilderColor::adjust_brightness($settings->bg_hover_color, 30, 'lighten');
    $border_hover_color = FLBuilderColor::adjust_brightness($settings->bg_hover_color, 12, 'darken');
}

?>
<?php // Default ?>
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:visited {

    <?php if(!empty($settings->font_size)) : ?>font-size: <?php echo $settings->font_size; ?>px;<?php endif; ?>
    <?php if(!empty($settings->font_size)) : ?>line-height: <?php echo $settings->font_size + 2; ?>px;<?php endif; ?>
    <?php if(!empty($settings->padding)) : ?>padding: <?php echo $settings->padding . 'px ' . ($settings->padding * 2) . 'px'; ?>;<?php endif; ?>
    <?php if(!empty($settings->border_radius)) : ?>border-radius: <?php echo $settings->border_radius; ?>px;<?php endif; ?>
    <?php if(!empty($settings->border_radius)) : ?>-moz-border-radius: <?php echo $settings->border_radius; ?>px;<?php endif; ?>
    <?php if(!empty($settings->border_radius)) : ?>-webkit-border-radius: <?php echo $settings->border_radius; ?>px;<?php endif; ?>

	<?php if(!empty($settings->bg_color)) : ?>
    background: #<?php echo $settings->bg_color; ?>;
    border: 1px solid #<?php echo $border_color; ?>;

	    <?php if($settings->three_d) : // 3D Styles ?>
	    background: -moz-linear-gradient(top,  #<?php echo $bg_grad_start; ?> 0%, #<?php echo $settings->bg_color; ?> 100%); /* FF3.6+ */
	    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php echo $bg_grad_start; ?>), color-stop(100%,#<?php echo $settings->bg_color; ?>)); /* Chrome,Safari4+ */
	    background: -webkit-linear-gradient(top,  #<?php echo $bg_grad_start; ?> 0%,#<?php echo $settings->bg_color; ?> 100%); /* Chrome10+,Safari5.1+ */
	    background: -o-linear-gradient(top,  #<?php echo $bg_grad_start; ?> 0%,#<?php echo $settings->bg_color; ?> 100%); /* Opera 11.10+ */
	    background: -ms-linear-gradient(top,  #<?php echo $bg_grad_start; ?> 0%,#<?php echo $settings->bg_color; ?> 100%); /* IE10+ */
	    background: linear-gradient(to bottom,  #<?php echo $bg_grad_start; ?> 0%,#<?php echo $settings->bg_color; ?> 100%); /* W3C */
	    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $bg_grad_start; ?>', endColorstr='#<?php echo $settings->bg_color; ?>',GradientType=0 ); /* IE6-9 */
	    <?php endif; ?>

    <?php endif; ?>

	<?php if($settings->width == 'custom') : ?>
	width: <?php echo $settings->custom_width; ?>px;
	<?php endif; ?>
}
<?php if(!empty($settings->text_color)) : ?>
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:visited,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button *,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:visited * {
    color: #<?php echo $settings->text_color; ?>;
}
<?php endif; ?>
<?php // Hover ?>
<?php if(!empty($settings->bg_hover_color)) : ?>
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:hover,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:focus {

    background: #<?php echo $settings->bg_hover_color; ?>;
    border: 1px solid #<?php echo $border_hover_color; ?>;

    <?php if($settings->three_d) : // 3D Styles ?>
    background: -moz-linear-gradient(top,  #<?php echo $bg_hover_grad_start; ?> 0%, #<?php echo $settings->bg_hover_color; ?> 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php echo $bg_hover_grad_start; ?>), color-stop(100%,#<?php echo $settings->bg_hover_color; ?>)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #<?php echo $bg_hover_grad_start; ?> 0%,#<?php echo $settings->bg_hover_color; ?> 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #<?php echo $bg_hover_grad_start; ?> 0%,#<?php echo $settings->bg_hover_color; ?> 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #<?php echo $bg_hover_grad_start; ?> 0%,#<?php echo $settings->bg_hover_color; ?> 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #<?php echo $bg_hover_grad_start; ?> 0%,#<?php echo $settings->bg_hover_color; ?> 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $bg_hover_grad_start; ?>', endColorstr='#<?php echo $settings->bg_hover_color; ?>',GradientType=0 ); /* IE6-9 */
    <?php endif; ?>
}
<?php endif; ?>
<?php if(!empty($settings->text_hover_color)) : ?>
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:hover,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:focus,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:hover *,
.fl-builder-content .fl-node-<?php echo $id; ?> a.fl-button:focus * {
    color: #<?php echo $settings->text_hover_color; ?>;
}
<?php endif; ?>
