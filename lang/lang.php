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
        $viptech_clock2 = 'Janeiro de 2022 até janeiro de 2023 - 1 ano e 1 mês';

        $datacampo_clock = '2 anos e 3 meses';
        $datacampo_map = 'Campo Mourão/PR - Brasil';
        $datacampo_job = 'Desenvolvedor Full Stack';
        $datacampo_time = 'Tempo Integral - maio de 2021 até janeiro de 2022 - 9 meses';
        $datacampo_job2 = 'Estagiário de programação';
        $datacampo_clock2 = 'Meio período - dezembro de 2019 até maio de 2021- 1 ano e 6 meses';

        $blz_clock = 'Meio período - 7 meses';
        $blz_map = 'Campo Mourão/PR - Brasil';
        $blz_job = 'Estágiario Suporte Técnico';
        $blz_time = 'Junho de 2019 até dezembro de 2019 - 7 meses';

        $vendramini_desc = 'Este projeto foi realizado como Trabalho de conclusão de curso submetido à banca examinadora da Faculdade Integrado de Campo Mourão – PR, como requisito parcial para a obtenção do título de Tecnólogo em Análise e Desenvolvimento de Sistemas, tendo como orientador o professor Anderson M. Fernandes.';
        $visualizar_documentacao = 'Visualizar documentação';
        $visualizar_projeto = 'Visualizar projeto';

        $visualizar_ementa = 'Visualizar ementa';
        $visualizar_certificado = 'Visualizar certificado';
        $anos = 'anos';
        $meses = 'meses';

    } elseif ($_SESSION['lang'] === 'en') {
        // EN
        $meta_desc = 'Welcome to my portfolio!';
        $experiencia = 'Experience';
        $formacao = 'Education';
        $competencias = 'Skills';

        $bg_layer = 'FULL STACK DEVELOPER';
        $pre_title = 'Hello, I am';
        $title_gratient = 'DEVELOPER';
        $subtitle = 'Full Stack';

        $viptech_clock = 'Full time - 1 year and 5 months';
        $viptech_map = 'Campo Mourão/PR - Brazil';
        $viptech_job = 'Junior Developer III';
        $viptech_time = 'January 2023 to present - 5 months';

        $viptech_clock2 = 'Janeiro de 2022 até janeiro de 2023 - 1 ano e 1 mês';
    }
?>