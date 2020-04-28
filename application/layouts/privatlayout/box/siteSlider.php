<div class="flexslider">
    <ul class="slides">
        <?php
        $imgNo = 1;
        while ($imgNo <= 5) {
            if ($imgNo == 1) {
                if ($this->getLayoutSetting('sliderImage' . $imgNo)) { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl($this->getLayoutSetting('sliderImage' . $imgNo)) ?>" alt="Slider <?=$imgNo ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText' . $imgNo) ?></p>
                    </li>
                <?php } else { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl('application/layouts/privatlayout/img/banner/pic1.jpg') ?>" alt="Slider <?=$imgNo ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText' . $imgNo) ?></p>
                    </li>
                <?php }
            } else {
                if ($this->getLayoutSetting('sliderImage' . $imgNo) && $this->getLayoutSetting('sliderButton' . $imgNo)) { ?>
                    <li>
                        <img src="<?=$this->getBaseUrl($this->getLayoutSetting('sliderImage' . $imgNo)) ?>" alt="Slider <?=$imgNo ?>" />
                        <p class="flex-caption"><?=$this->getLayoutSetting('sliderText' . $imgNo) ?></p>
                    </li>
                <?php }
            }
            $imgNo++;
        }
        ?>
    </ul>
</div>
