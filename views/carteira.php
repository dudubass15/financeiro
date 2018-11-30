<main class="container">
    <!-- Carteira -->
    <div class="card-body" id="card-body">
        <div class="card" id="carteira">
            <div class="card-body">
                <h5 class="card-title">Nome completo da pessoa <i class="fa fa-money"></i></h5><hr>
                    <p class="card-valor">R$: 0,00</p>
                    <p class="card-text"><small>Atualizado há 3 minutos</small></p>
            </div>
        </div>
    <!-- End -->
    </div>

    <div class="modal fade" id="modalDefaultContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!--Modal: Contact form-->
        <div class="modal-dialog cascading-modal" role="document">
            
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header info-color white-text">
                    <h4 class="title">
                        <i class="fa fa-money"></i> Nova Carteira</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
            
                    <!-- Default input name -->
                    <label for="defaultFormNameModalEx">Nome Completo</label>
                    <input type="text" id="defaultFormNameModalEx" class="form-control form-control-sm">
            
                    <br>

                    <!-- Default input cor -->
                    <label for="defaultFormNameModalEx">Cor</label>
                    <input type="color" id="defaultFormNameModalEx" class="form-control form-control-sm">
            
                    <br>
            
                    <!-- Default textarea message -->
                    <label for="defaultFormMessageModalEx">Descrição</label>
                    <textarea type="text" id="defaultFormMessageModalEx" class="md-textarea form-control"></textarea>

                    <br>

                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                        <label class="custom-control-label" for="defaultContactFormCopy">Ativo</label>
                    </div>
            
                    <div class="text-center mt-4 mb-2">
                        <button class="btn btn-info">Enviar
                            <i class="fa fa-send ml-2"></i>
                        </button>
                    </div>
            
                </div>
            </div>
            <!--/.Content-->
        </div>
        <!--/Modal: Contact form-->
    </div>

    <div class="fixed-bottom" id="button-flutuante">
        <a class="btn-floating btn-lg red" data-toggle="modal" data-target="#modalDefaultContactForm">
            <i class="fa fa-plus"></i>
        </a>
    </div>

</main><br><br>

</div>

<!-- Footer -->
<footer class="page-footer font-small blue" style="position: fixed; bottom: 0px; width: 100%;">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?php echo date("Y"); ?> Copyright:
        <a href="https://sistemaskadu.com.br"> Sistemaskadu.com.br</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->