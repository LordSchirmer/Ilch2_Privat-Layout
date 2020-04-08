<div class="flexslider">
    <ul class="slides">
        <?php
        $i = 1;
        while ($i <= 5) {
            if ($i == 1) {
                if ($this->getLayoutSetting('sliderImage'.$i) != '') { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl('application/layouts/privatlayout/img/banner/pic1.jpg') ?>" alt="Slider <?=$i ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText'.$i) ?></p>
                    </li>
                <?php } else { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl($this->getLayoutSetting('sliderImage'.$i)) ?>" alt="Slider <?=$i ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText'.$i) ?></p>
                    </li>
                <?php }
            } else {
                if ($this->getLayoutSetting('sliderImage'.$i) != '' AND $this->getLayoutSetting('sliderButton'.$i) == 1) { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl($this->getLayoutSetting('sliderImage'.$i)) ?>" alt="Slider <?=$i ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText'.$i) ?></p>
                    </li>
                <?php }
            }
            $i++;
        }
        ?>
    </ul>
</div>
