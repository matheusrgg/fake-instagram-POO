


<header>
        
        
        <nav class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="#"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
        </nav>

        <?php if(isset($_SESSION['newsession']) ? $_SESSION['newsession'] : []){ ?>
        <p><?php echo $_SESSION['newsession']['0']['name'] ?> </p>
        <a href="/fake-instagram-poo/views/includes/loginUsuario.php">Sair</a>

        <?php } ?>

        
</header>