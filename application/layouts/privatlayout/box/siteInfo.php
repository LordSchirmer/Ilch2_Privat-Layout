<?php
$orgSiteInfo = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';

if ($this->getLayoutSetting('siteInfo') != '') {
    echo '<p>'.nl2br($this->getHtmlFromBBCode($this->getLayoutSetting('siteInfo'))).'</p>';
} else {
    echo '<p>'.$orgSiteInfo.'</p>';
}

$buttons = '';
if ($this->getLayoutSetting('button1') == 1) {
    $buttons .= '<a target="_blank" href="'.$this->getLayoutSetting('urlButton1').'" class="buttonlink">'.$this->getLayoutSetting('textButton1').'</a>';
}
if ($this->getLayoutSetting('button2') == 1) {
    $buttons .= '<a target="_blank" href="'.$this->getLayoutSetting('urlButton2').'" class="buttonlink">'.$this->getLayoutSetting('textButton2').'</a>';
}
if ($this->getLayoutSetting('button3') == 1) {
    $buttons .= '<a target="_blank" href="'.$this->getLayoutSetting('urlButton3').'" class="buttonlink">'.$this->getLayoutSetting('textButton3').'</a>';
}
if ($this->getLayoutSetting('button1') == 1 OR $this->getLayoutSetting('button2') == 1 OR $this->getLayoutSetting('button3') == 1) {
    echo '<p>'.$buttons.'</p>';
}
