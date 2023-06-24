<?php
    session_start();

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'br';
    }
    
    if ($_SESSION['lang'] === 'br') {
        // BR
        $meta_desc = 'Seja bem vindo ao meu portfolio!';
        $experiencia = 'Experiência';
        $formacao = 'Formação';
        $competencias = 'Competências';

        $bg_layer = 'DESENVOLVEDOR FULL STACK';
        $pre_title = 'Olá, eu sou';
        $title_gratient = 'DESENVOLVEDOR';
        $subtitle = 'Full Stack';

        $viptech_clock = 'Tempo integral - 1 ano e 5 meses';
        $viptech_map = 'Campo Mourão/PR - Brasil';
        $viptech_job = 'Desenvolvedor Junior III';
        $viptech_time = 'Janeiro de 2023 até o momento - 5 meses';
        
    } elseif ($_SESSION['lang'] === 'en') {
        // EN
        $titulo = "Page Title";
        $texto1 = "Welcome to my page!";
        $texto2 = "About";
    }
?>