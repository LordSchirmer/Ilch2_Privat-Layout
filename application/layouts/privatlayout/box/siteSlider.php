<div class="flexslider">
  <ul class="slides">
    <?php if ($this->getLayoutSetting('slider1') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider1')) ?>" alt="Slider 1" />
      <p class="flex-caption"><?=$this->getLayoutSetting('sliderText1') ?></p>
    </li>
    <?php } ?>
    <?php if ($this->getLayoutSetting('slider2') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider2')) ?>" alt="Slider 2" />
      <p class="flex-caption"><?=$this->getLayoutSetting('sliderText2') ?></p>
    </li>
    <?php } ?>
    <?php if ($this->getLayoutSetting('slider3') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider3')) ?>" alt="Slider 3" />
      <p class="flex-caption"><?=$this->getLayoutSetting('sliderText3') ?></p>
    </li>
    <?php } ?>
    <?php if ($this->getLayoutSetting('slider4') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider4')) ?>" alt="Slider 4" />
      <p class="flex-caption"><?=$this->getLayoutSetting('sliderText4') ?></p>
    </li>
    <?php } ?>
    <?php if ($this->getLayoutSetting('slider5') != '') { ?>
    <li>
      <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider5')) ?>" alt="Slider 5" />
      <p class="flex-caption"><?=$this->getLayoutSetting('sliderText5') ?></p>
    </li>
    <?php } ?>
  </ul>
</div>
