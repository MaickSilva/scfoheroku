<nav class="navbar navbar-expand-md navbar-dark bg-secondary ">
    <div class="container">
        <a class="navbar-brand " href="logado.php">SCFO</a>
        <form class="form-inline">
            <ul class="list-unstyled text-white text-center ml-2 mr-2 pt-2">
                <li>
                    <p class="mb-0 ">Nome usuário</p>
                </li>
                <li>
                    <?php 
                    echo " ".$_SESSION['cpf']
                    ?>
    
                </li>
            </ul>
            <button type="button" class="btn btn-dark">Sair</button>
        </form>
    </div>
</nav>