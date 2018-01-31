<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $data
 */

$unique_id = 'www-slider-'. fw_unique_increment();
?>
<?php if (isset($data['slides'])): ?>
    <script type="text/javascript">
        jQuery(function($){ $('#<?php echo $unique_id ?>').unslider(); });
    </script>
    <div id="<?php echo $unique_id ?>">
        <ul class="jc-slider" >
            <?php foreach ($data['slides'] as $slide): ?>
                <li class="jc-animation">
                    <?php if ($slide['multimedia_type'] === 'video') : ?>
                        <?php echo fw_oembed_get($slide['src'], $dimensions); ?>
                    <?php else: ?>
                        <img src="<?php echo fw_resize($slide['src'], $dimensions['width'], $dimensions['height']); ?>"
                             alt="<?php echo esc_attr($slide['title']) ?>"
                             width="<?php echo esc_attr($dimensions['width']); ?>"
                             height="<?php echo $dimensions['height']; ?>" />
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
     <!-- CSS stylesheet for jcSlider -->
        <link rel="stylesheet" href="css/jcslider.css">
        <!-- animate CSS stylesheet library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
        <!-- jQuery library (served from Google) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!-- Slider Javascript file -->
        <script src="../jquery.jcslider.js"></script>

        <script>
            jQuery(document).ready(function() {


                jQuery('.jc-slider').jcSlider({
                    animationIn: 'zoomInUp',
                    animationOut: 'flipOutX',
                    stopOnHover: false
                });
               
            });
        </script>
<?php endif; ?>