<?php 
if ($this->getLayoutSetting('siteLogo') != '') { 
    echo '<a href="'.$this->getUrl().'"><img id="logo" src="'.$this->getBaseUrl($this->getLayoutSetting('siteLogo')).'" alt="logo"></a>';
} else {
    echo '<a href="'.$this->getUrl().'"><img id="logo" src="'.$this->getBaseUrl('application/layouts/privatlayout/img/logo.png').'" alt="logo"></a>';
}
