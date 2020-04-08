<?php 
$orgSiteTitle = 'Free Private Layout';

if ($this->getLayoutSetting('siteTitle') != '') { 
    echo '<h1>'.$this->getLayoutSetting('siteTitle').'</h1>';
} else {
    echo '<h1>'.orgSiteTitle.'</h1>';
}
