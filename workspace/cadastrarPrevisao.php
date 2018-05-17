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
                    <a href="cadastrarConta.php" class="nav-link btn-secondary" id="cadastroConta" role="tab" aria-controls="v-pills-contas" aria-selected="true">Cadastrar conta</a>
                    <a class="nav-link btn-secondary mt-1 active" id="v-pills-profile-tab" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cadastrar previsões</a>
                    <a href="inserirValores.php" class="nav-link btn-secondary mt-1" id="inserirValores" role="tab" aria-controls="v-pills-valores" aria-selected="false">Cadastrar realizações</a>
                    <a href="#" class="nav-link btn-secondary mt-1" id="v-pills-settings-tab" role="tab" aria-controls="v-pills-settings" aria-selected="false">Emitir relatórios</a>
                </div>
            </div>
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                <div class="card text-white bg-light mb-3 mt-2 mx-auto" style="max-width: 30rem;">
                    <div class="card-body">
                        <div class="container ">
                            <form class="mx-auto text-dark " style="width: auto;" "card-text">
                                <div class="container text-center">
                                    <h5>Valores Previstos</h5>
                                </div>
                                
                                <div class="form-group">
                                    <label for="tipoConta">Selecione a Conta</label>
                                    <select class="form-control">
                                        <option>Agua</option>
                                        <option>Luz</option>
                                        <option>Internet</option>
                                        <option>Gás</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputCpf">Pagar/Receber no dia</label>
                                    <input type="text" class="form-control" id="datavencimento" placeholder="DD/MM/AAAA" name="dataVencimento" OnKeyPress="formatar('##/##/##', this)" maxlength="10">
                                </div>
                                
                               <div class="form-group">
                                    <label for="exampleInputCpf">Valor da conta</label>
                                    <input type="text" class="form-control" id="valorconta" placeholder="R$ 000,00" name="dataVencimento">
                                </div>
                                    
                                <button type="submit" class="btn btn-dark float-right mt-3 btn-sm col-">Salvar</button>
                                <a href="logado.php">
                                    <button type="button" class="btn btn-dark mt-3 btn-sm col-">Cancelar</button>
                                </a>

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