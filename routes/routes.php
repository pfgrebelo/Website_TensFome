<?php
    if(isset($_GET['p'])){
        $p=$_GET['p'];
        if($p == 'home')
            include('content/pages/home.php');
        else if($p == 'quem-somos')
            include('content/pages/quem-somos.php');
        else if($p == 'restaurantes')
            include('content/pages/restaurantes.php');
        else if($p == 'restaurant')
            include('content/pages/restaurante.php');
        else if($p == 'faq')
            include('content/pages/faq.php');
        else if($p == 'contacto')
            include('content/pages/contacto.php');
        else if($p == 'politica-privacidade')
            include('content/pages/politica-privacidade.php');
        else if($p == 'termos-condicoes')
            include('content/pages/termos-condicoes.php');
        else if($p == 'formas-pagamento')
            include('content/pages/formas-pagamento.php');
        else if($p == 'login' && empty($_SESSION['username']))
            include('content/pages/login.php');
        else if($p == 'registo' && empty($_SESSION['username']))
            include('content/pages/registo.php');
        else if($p == 'minha-conta' && !empty($_SESSION['username']))
            include('content/pages/minha-conta.php');
        else if($p == 'administracao' && !empty($_SESSION['type']) && $_SESSION['type']==1)
            include('content/pages/administracao.php');
        else if($p == 'logout' && !empty($_SESSION['username']))
            include('content/pages/logout.php');
        else if($p == 'editrestaurant' && !empty($_SESSION['type']) && $_SESSION['type']==1)
            include('content/pages/editar-restaurante.php');
        else
            include('content/pages/404.php');
    }else if(isset($_GET['search']))
            include('content/pages/restaurantes.php');
    else
        include('content/pages/home.php');
?>