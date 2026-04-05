<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montinero | Booking</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Syncopate:wght@700&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-red: #cc0000;
            --bg-dark: #070707;
        }

    body {
    /* Define a cor de fundo padrão para garantir que o texto permaneça legível se a imagem não carregar. */
    background-color: #000;
    
    /* ADICIONADO O OVERLAY AQUI */
    /* Define a imagem de fundo com um overlay preto semi-transparente (75% de opacidade). */
    /* rgba(0, 0, 0, 0.75) significa: Preto, Preto, Preto, 75% Transparente */
    background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.75)), url('assets/bg_2.png');
    
    /* Garante que a imagem preencha todo o fundo sem ser esticada ou cortada desproporcionalmente. */
    background-size: cover;
    
    /* Centraliza a imagem no fundo. */
    background-position: center;
    
    /* Faz com que a imagem de fundo permaneça fixa quando o usuário rola a página, criando um efeito de paralaxe. */
    background-attachment: fixed;
    
    /* Impede que a imagem de fundo se repita. */
    background-repeat: no-repeat;
    
    /* Define a cor padrão do texto. */
    color: #fff;
    
    /* Define a fonte padrão. */
    font-family: 'Outfit', sans-serif;
    
    /* Impede a rolagem horizontal acidental. */
    overflow-x: hidden;
}
    /* Outras regras CSS da sua página... */


        .industrial-font {
            font-family: 'Syncopate', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.3em;
        }

        /* EFEITO DO LOGO QUE VOCÊ GOSTOU */
        .logo-container {
            position: relative;
            transition: all 0.5s ease;
        }

        .logo-img {
            filter: grayscale(100%);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .logo-aura {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 140%; height: 140%;
            background: radial-gradient(circle, rgba(204, 0, 0, 0.25) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
        }

        /* Ativa o efeito ao passar o mouse no header */
        header:hover .logo-img {
            filter: grayscale(0%);
            border-color: var(--brand-red);
            transform: scale(1.05) rotate(2deg);
        }

        header:hover .logo-aura {
            opacity: 1;
        }

        /* BOTÕES SOCIAIS ROBUSTOS */
        .social-btn {
            @apply flex-1 flex flex-col items-center justify-center py-7 rounded-2xl border border-white/5 bg-white/5 transition-all duration-300;
        }

        .social-btn i { @apply text-4xl mb-2 text-gray-500 transition-all; }
        .social-btn span { @apply text-[9px] font-bold uppercase tracking-[0.2em] text-gray-600; }

        .social-btn:hover {
            @apply border-red-600/40 bg-red-950/10;
            transform: translateY(-5px);
        }

        .social-btn:hover i { @apply text-red-600 scale-110; }
        .social-btn:hover span { @apply text-gray-200; }

        /* CARDS DE CONTATO */
        .contact-card {
            background: #0f0f0f;
            border: 1px solid rgba(255, 255, 255, 0.03);
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            border-color: rgba(204, 0, 0, 0.4);
            background: #141414;
        }
        .social-grid {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

.social-item {
    position: relative;
    background: rgba(255, 255, 255, 0.03); /* Fundo quase invisível */
    border: 1px solid rgba(255, 255, 255, 0.08); /* Borda fina estilosa */
    height: 80px;
    width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px; /* Quase quadrado para ser mais agressivo */
    transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    overflow: hidden;
}

/* O ícone propriamente dito */
.social-item i {
    font-size: 32px;
    color: #666;
    transition: all 0.4s ease;
    z-index: 2;
}

/* Texto que aparece no hover */
.social-name {
    position: absolute;
    bottom: 8px;
    font-size: 8px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #444;
    opacity: 0;
    transition: all 0.4s ease;
}

/* Efeito de Hover: Estiloso e Limpo */
.social-item:hover {
    background: rgba(255, 255, 255, 0.05);
    border-color: #ff0000; /* Vermelho vivo só na borda */
    transform: translateY(-2px);
}

.social-item:hover i {
    color: #fff;
    transform: scale(1.1);
    filter: drop-shadow(0 0 8px rgba(255, 0, 0, 0.5));
}

.social-item:hover .social-name {
    opacity: 1;
    color: #ff0000;
}

/* Detalhe de "mira" nos cantos (opcional, mas dá o toque final) */
.social-item::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 4px;
    border-top: 1px solid transparent;
    border-left: 1px solid transparent;
    transition: 0.4s;
}

.social-item:hover::before {
    border-color: #ff0000;
}
    </style>
</head>
<body class="text-gray-300 min-h-screen">

    <!-- header -->
    <?php include 'includes/header.php' ?>

    <main class="max-w-md mx-auto px-6 pb-20">
        
        <!-- Redes Sociais Grandes -->
        <?php include 'includes/socialmedias.php' ?>
        
        <!-- Seção de Contatos -->
        <?php include 'includes/contacts.php' ?>

        <footer class="mt-24 text-center opacity-30 hover:opacity-100 transition-opacity">
            <p class="text-[8px] text-gray-500 uppercase tracking-[0.5em] font-bold italic">Batalha é o que nos move</p>
        </footer>
    </main>

</body>
</html>