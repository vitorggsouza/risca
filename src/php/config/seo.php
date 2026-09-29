<?php

return [
    'defaults' => [
        'og_type' => 'website',
        'og_img' => sprintf('%s/assets/imgs/og.jpeg', $_ENV['APP_URL']),
        'twitter_card' => 'summary_large_image'
    ],
    'home' => [
        'description' => sprintf(
            'O %s é uma aplicação web de tarefas simples e intuitiva, desenvolvida para ajudar os 
                usuários a registrarem suas tarefas de forma prática e rápida.',
            $_ENV['APP_NAME']
        ),
        'canonical' => sprintf('%s/home', $_ENV['APP_URL']),
        'robots' => 'index, follow',
        'og_url' => sprintf('%s/home', $_ENV['APP_URL']),
        'title' => sprintf('%s – Organize sua rotina', $_ENV['APP_NAME'])
    ],
    'about' => [
        'description' => sprintf('Sobre o %s e seu desenvolvedor.', $_ENV['APP_NAME']),
        'canonical' => sprintf('%s/about', $_ENV['APP_URL']),
        'robots' => 'index, follow',
        'og_url' => sprintf('%s/about', $_ENV['APP_URL']),
        'title' => sprintf('Sobre – %s', $_ENV['APP_NAME'])
    ],
    'signup' => [
        'description' => sprintf('Crie sua conta no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/signup', $_ENV['APP_URL']),
        'title' => sprintf('Criar conta – %s', $_ENV['APP_NAME'])
    ],
    'login' => [
        'description' => sprintf('Faça login no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/login', $_ENV['APP_URL']),
        'title' => sprintf('Login – %s', $_ENV['APP_NAME'])
    ],
    'forgot-password' => [
        'description' => sprintf('Recupere sua senha no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/forgot-password', $_ENV['APP_URL']),
        'title' => sprintf('Esqueci minha senha – %s', $_ENV['APP_NAME'])
    ],
    'reset-password' => [
        'description' => sprintf('Redefina sua senha no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/reset-password', $_ENV['APP_URL']),
        'title' => sprintf('Redefinir senha – %s', $_ENV['APP_NAME'])
    ],
    'create-task' => [
        'description' => sprintf('Crie uma tarefa no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/tasks/create', $_ENV['APP_URL']),
        'title' => sprintf('Criar tarefa – %s', $_ENV['APP_NAME'])
    ],
    'tasks' => [
        'description' => sprintf('Gerencie suas tarefas no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'title' => sprintf('Minhas tarefas – %s', $_ENV['APP_NAME'])
    ],
    'edit-task' => [
        'description' => sprintf('Edite sua tarefa no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'title' => sprintf('Editar tarefa – %s', $_ENV['APP_NAME'])
    ],
    'delete-task' => [
        'description' => sprintf('Exclua sua tarefa no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'title' => sprintf('Excluir tarefa – %s', $_ENV['APP_NAME'])
    ],
    'account' => [
        'description' => sprintf('Gerencie sua conta no %s.', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'og_url' => sprintf('%s/account', $_ENV['APP_URL']),
        'title' => sprintf('Minha conta – %s', $_ENV['APP_NAME'])
    ],
    'default' => [
        'description' => sprintf('Seja bem-vindo ao %s!', $_ENV['APP_NAME']),
        'robots' => 'noindex, nofollow',
        'title' => $_ENV['APP_NAME']
    ]
];
