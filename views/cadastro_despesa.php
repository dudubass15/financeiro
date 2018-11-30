<main class="container text-center">
    <div class="form-row">
        <div class="form-group col-md-6" id="form-cadastro-valores">
            <!-- Material form contact -->
            <div class="card">

                <h5 class="card-header white-text text-center py-4" style="background-color: #FF2235;">
                    <strong>Nova Despesa</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;">

                        <br>
                        
                        <!-- Carteira -->
                        <div class="form-group">
                            <label for="inputState" style="float: left;">Selecione a Carteira:</label>
                            <select id="inputState" class="form-control">
                                <option selected></option>
                                <option>...</option>
                            </select>
                        </div>

                        <!-- Tipo -->
                        <div class="form-group">
                            <label for="inputState" style="float: left;">Informe o Tipo:</label>
                            <select id="inputState" class="form-control">
                                <option selected></option>
                                <option>...</option>
                            </select>
                        </div>

                        <!-- Valor -->
                        <div class="form-group">
                            <label for="inputAddress" style="float: left;">Informe o Valor:</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="R$: 0,00">
                        </div>

                        <!-- Parcelas -->
                        <div class="form-group">
                            <label for="inputAddress" style="float: left;">Quant. Parcelas:</label>
                            <select id="inputState" class="form-control">
                                <option selected>1x</option>
                                <option>2x</option>
                                <option>3x</option>
                                <option>4x</option>
                                <option>5x</option>
                                <option>6x</option>
                                <option>7x</option>
                                <option>8x</option>
                                <option>9x</option>
                                <option>10x</option>
                            </select>
                        </div>

                        <!-- Carteira -->
                        <div class="form-group">
                            <label for="inputState" style="float: left;">Status:</label>
                            <select id="inputState" class="form-control">
                                <option selected>Pendente</option>
                                <option>Pago</option>
                                <option>A pagar</option>
                            </select>
                        </div>

                        <!--Observação-->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="float: left;">Observação</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <!-- Send button -->
                        <button class="btn btn-block my-4" style="background-color: #FF2235;" type="submit">Salvar</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form contact -->
        </div>
    </div>
</main>