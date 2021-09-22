<?php 

    $config = [
        ['Genel Ayarlar'],
        [
            'name' => 'Adınız',
            'text' => 'Adınızı giriniz'
        ],
        [
            'name' => 'Şifre',
            'text' => 'Şifrenizi giriniz'
        ],
        [
            'name' => 'E-mail',
            'text' => 'E-mailinizi giriniz'
        ],
        ['Yeni Ayarlar'],
        [
            'name' => 'Hakkınızda',
            'text' => 'Hakkınızda bilgisi giriniz',
            'type' => 'textarea',
            'style' => 'border:2px solid green;',
            'id' => '1'
        ],
        [
            'name' => 'Site Durumu',
            'text' => 'Site durumunu belirtin',
            'type' => 'select',
            'options' => [
                ['1', 'Açık'],
                ['0', 'Kapalı']
            ]
        ]
    ];
?>