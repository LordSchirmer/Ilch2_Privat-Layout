<?php
namespace Layouts\PrivatLayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Ilch-Privat',
        'version' => '1.0.1',
        'ilchCore' => '2.1.32',
        'author' => 'Lord|Schirmer',
        'link' => 'https://www.ilch.de',
        'desc' => 'Privat Layout',
        'settings' => [
            'siteLogo' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/logo.png',
                ],
            'siteTitle' => [
                'type' => 'text',
                'default' => 'Free Private Layout',
                'description' => 'descSiteTitle',
                ],
            'siteInfo' => [
                'type' => 'ckeditorbbcode',
                'default' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                ],
            'buttons' => [
                'type' => 'separator',
            ],
            'button1' => [
                'type' => 'flipswitch',
                'default' => '1',
                ],
            'textButton1' => [
                'type' => 'text',
                'default' => 'ilch.de',
                ],
            'urlButton1' => [
                'type' => 'text',
                'default' => 'https://www.ilch.de/',
                ],                
             'button2' => [
                'type' => 'flipswitch',
                'default' => '1',
                ],
            'textButton2' => [
                'type' => 'text',
                'default' => 'google.de',
                ],
            'urlButton2' => [
                'type' => 'text',
                'default' => 'https://www.google.de/',
                ],                
            'button3' => [
                'type' => 'flipswitch',
                'default' => '1',
                ],
            'textButton3' => [
                'type' => 'text',
                'default' => 'github ilch2 wiki',
                ],
            'urlButton3' => [
                'type' => 'text',
                'default' => 'https://github.com/IlchCMS/Ilch-2.0/wiki',
                ],
            'sliders' => [
                'type' => 'separator',
            ],
            'sliderText1' => [
                'type' => 'text',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitr',
                ],            
            'sliderImage1' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/banner/pic1.jpg',
                'description' => 'descSlider1',
                ],
            'sliderButton2' => [
                'type' => 'flipswitch',
                'default' => 'Slider 2',
                ],
            'sliderText2' => [
                'type' => 'text',
                'default' => 'At vero eos et accusam et justo duo dolores et ea rebum',
                ],
            'sliderImage2' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/banner/pic2.jpg',
                'description' => 'descSlider',
                ],
            'sliderButton3' => [
                'type' => 'flipswitch',
                'default' => 'Slider 3',
                ],
            'sliderText3' => [
                'type' => 'text',
                'default' => 'Stet clita kasd gubergren',
                ],
            'sliderImage3' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/banner/pic3.jpg',
                'description' => 'descSlider',
                ],
            'sliderButton4' => [
                'type' => 'flipswitch',
                'default' => 'Slider 4',
                ],
            'sliderText4' => [
                'type' => 'text',
                'default' => 'Sed ut perspiciatis unde omnis iste natus error sit',
                ],
            'sliderImage4' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/banner/pic4.jpg',
                'description' => 'descSlider',
                ],
            'sliderButton5' => [
                'type' => 'flipswitch',
                'default' => 'Slider 5',
                ],
            'sliderText5' => [
                'type' => 'text',
                'default' => 'Quis autem vel eum iure reprehenderit qui in ea',
                ],
            'sliderImage5' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/img/banner/pic5.jpg',
                'description' => 'descSlider',
                ],
            ],
        'layouts' => [
            'index_full' => [
                ['module' => 'user', 'controller' => 'panel'],
                ['module' => 'forum'],
            ],
        ],
    ];

    public function getUpdate($installedVersion)
    {

    }
}
