<header>
        <nav class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="#"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
        </nav>

       <!-- <p><?php //var_dump($_SESSION['newsession'])?> </p> --->

        <p><?php echo $_SESSION['newsession']['0']['nome'] ?> </p>
        <a href="/fake-instagram-poo/controller/LoginController.php/login">Sair</a>

        
</header>