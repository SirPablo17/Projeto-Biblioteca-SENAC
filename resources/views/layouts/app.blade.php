{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Online</title>
    <link rel="icon" type="image/x-icon" href="\img\logo.svg">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    @vite([
        'resources/css/app.css',       // <--- OBRIGATÓRIO (Tailwind)
        'resources/js/app.js',         // <--- OBRIGATÓRIO (Scripts padrão)
        'resources/css/style.css',     // <--- Seus estilos customizados
        'resources/js/header-wrapper.js',
        'resources/js/header.js',
        'resources/js/hero-carousel.js'
    ]) 'resources/js/header.js', 'resources/js/hero-carousel.js'])
</head>
<body>
    {{-- HEADER (Vamos incluir como um componente depois) --}}
    <div class="header-sticky-wrapper">
        @include('partials.header')
    </div>

    {{-- CONTEÚDO DINÂMICO (Aqui entra o miolo de cada página) --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>