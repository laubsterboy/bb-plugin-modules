<div class="fl-button-width-<?php echo $settings->width; if(!empty($settings->align)) echo ' fl-button-' . $settings->align; ?>">
    <a href="<?php echo $settings->link; ?>" target="<?php echo $settings->link_target; ?>" class="fl-button" role="button">
        <?php if(!empty($settings->icon)) : ?>
        <i class="fa <?php echo $settings->icon; ?>"></i>
        <span>
        <?php endif; ?>
        <?php echo $settings->text; ?>
        <?php if(!empty($settings->icon)) : ?>
        </span>
        <?php endif; ?>
    </a>
</div>
