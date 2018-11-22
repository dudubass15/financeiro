<main class="container">
    <div class="card-deck">
        <div class="card" id="card-carteira">
            <div class="card-body">
            <h5 class="card-title">Carteira(s)</h5><hr>
            <p class="card-valor">R$: 0,00</p>
            <p class="card-text"><small>Atualizado há 3 minutos</small></p>
            </div>
        </div>
        <div class="card" id="card-bonus">
            <div class="card-body">
            <h5 class="card-title">Bônus/Extra</h5><hr>
            <p class="card-valor">R$: 0,00</p>
            <p class="card-text"><small>Atualizado há 3 minutos</small></p>
            </div>
        </div>
        <div class="card" id="card-despesas">
            <div class="card-body">
            <h5 class="card-title">Despesas</h5><hr>
            <p class="card-valor">R$: 0,00</p>
            <p class="card-text"><small>Atualizado há 3 minutos</small></p>
            </div>
        </div>
    </div><br><br>

    <!-- Table with panel -->
    <div class="card card-cascade narrower">
        <!--Card image-->
        <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-th-large mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-columns mt-0"></i>
                </button>
            </div>
            <a href="" class="white-text mx-3">Histórico Financeiro</a>
            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-pencil mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-remove mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                <i class="fa fa-info-circle mt-0"></i>
                </button>
            </div>
        </div>
        <!--/Card image-->

        <div class="px-4">
            <div class="table-wrapper table-responsive">
                <!--Table-->
                <table class="table table-hover mb-0">
                    <!--Table head-->
                    <thead>
                        <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                        </th>
                        <th class="th-lg">
                            <a>Status
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Nome
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Tipo da Despesa
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Estabelecimento
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Parcelamento
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="th-lg">
                            <a href="">Valor
                            <i class="fa fa-sort ml-1"></i>
                            </a>
                        </th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                        <tr>
                        <th scope="row">
                            <input class="form-check-input" type="checkbox" id="checkbox1">
                            <label class="form-check-label" for="checkbox1" class="label-table"></label>
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <input class="form-check-input" type="checkbox" id="checkbox2">
                            <label class="form-check-label" for="checkbox2" class="label-table"></label>
                        </th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <input class="form-check-input" type="checkbox" id="checkbox3">
                            <label class="form-check-label" for="checkbox3" class="label-table"></label>
                        </th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">
                            <input class="form-check-input" type="checkbox" id="checkbox4">
                            <label class="form-check-label" for="checkbox4" class="label-table"></label>
                        </th>
                        <td>Paul</td>
                        <td>Topolski</td>
                        <td>@P_Topolski</td>
                        <td>Paul</td>
                        <td>Topolski</td>
                        <td>@P_Topolski</td>
                        </tr>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>
        </div>
    </div><br>
    <!-- Table with panel -->

    <nav aria-label="Page navigation example" id="pagination-historico">
        <ul class="pagination pg-blue">
            <li class="page-item disabled">
            <span class="page-link">Anterior</span>
            </li>
            <li class="page-item active">
                <span class="page-link">
                    1
                    <span class="sr-only">(current)</span>
                </span>
            </li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item">
            <a class="page-link">Próximo</a>
            </li>
        </ul>
    </nav><br><br>

    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                <p class="heading lead">O que deseja cadastrar ?</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center" id="modal-buttons">
                    <a type="button" class="btn btn-primary btn-md" href="cadastro_valores.html"><i class="fa fa-money ml-1 text-white"></i> Valor</a>
                    <a type="button" class="btn btn-primary btn-md" href="cadastro_bonus.html"><i class="fa fa-percent ml-1 text-white"></i> Bônus/Extra</a>
                    <a type="button" class="btn btn-primary btn-md" href="cadastro_despesa.html"><i class="fa fa-shopping-bag ml-1 text-white"></i> Despesa</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Info-->

    <div class="fixed-bottom" id="button-flutuante">
        <a class="btn-floating btn-lg red" data-toggle="modal" data-target="#centralModalInfo">
            <i class="fa fa-plus"></i>
        </a>
    </div>

</main><br><br>