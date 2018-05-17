<?php include "header.php" ?>
<?php
    session_start();
    if(!isset($_SESSION['UsuarioLog'])){
        header("Location: index.php");
        session_destroy();
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: index.php");
    }
?>
    
    <?php include "navbarLogado.php" ?>

        <div class="container mb-3"> 
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="nav flex-column nav-pills mt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                        <a href="cadastrarConta.php" class="btn btn-secondary text-left" id="cadastroConta" role="tab" aria-controls="v-pills-home" aria-selected="false">Cadastrar conta</a>
                        <a href="cadastrarPrevisao.php" class="btn btn-secondary mt-1 text-left" id="v-pills-profile-tab" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastrar previsões</a>
                        <a href="inserirValores.php" class="btn btn-secondary mt-1 text-left" id="inserirValores" role="tab" aria-controls="v-pills-valores" aria-selected="false">Cadastrar realizações</a>
                        <a class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle mt-1 text-white text-left" id="dropdownMenuLink" aria-controls="v-pills-valores" role="tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Emitir relatórios
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="Relatorio.php">Relatorio 1</a>
                            <a class="dropdown-item" href="#">Relatorio 2</a>
                            <a class="dropdown-item" href="#">Relatorio 3</a>
                          </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="card text-white bg-light mb-3 mt-2 mx-auto" style="max-width: 30rem;">
                        <div class="card-body">
                            <div class="container">
                                <form class="mx-auto text-dark " style="width: auto;" "card-text">
                                    <div class="container text-center">
                                        <h2>Sistema de Controle Financeiro Orçamentário</h2>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include "footer.php" ?>

</body>
</html>