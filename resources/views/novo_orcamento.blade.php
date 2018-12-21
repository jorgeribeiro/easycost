@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Novo orçamento</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Código do orçamento</label>
                                <input type="text" class="form-control" value="0000010">
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Data SINAPI</label>
                                <input type="text" class="form-control" value="10/2018">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control" value="Maranhão">
                            </div>
                        </div>
                    </div>                    
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">Itens deste orçamento</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Item</th>
                                    <th>Banco</th>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Unidade</th>
                                    <th>Quantidade</th>
                                    <th>Valor</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Etapa</td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>314,50</td>
                                    </tr>
                                    <tr>
                                        <td>Composição</td>
                                        <td>1.1</td>
                                        <td>SINAPI</td>
                                        <td>92740</td>
                                        <td>CONCRETAGEM DE VIGAS E LAJES, FCK=20 MPA, PARA LAJES MACIÇAS OU NERVURADAS COM GRUA DE CAÇAMBA DE 500 L EM EDIFICAÇÃO DE MULTIPAVIMENTOS ATÉ 16 ANDARES, COM ÁREA MÉDIA DE LAJES MAIOR QUE 20 M² - LANÇAMENTO, ADENSAMENTO E ACABAMENTO. AF_12/2015</td>
                                        <td>m³</td>
                                        <td>0,97</td>
                                        <td>314,50</td>
                                    </tr> 
                                    <tr>
                                        <td>Etapa</td>
                                        <td>2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>2.252,40</td>
                                    </tr>
                                    <tr>
                                        <td>Insumo</td>
                                        <td>2.1</td>
                                        <td>SINAPI</td>
                                        <td>74209/001</td>
                                        <td>PLACA DE OBRA EM CHAPA DE ACO GALVANIZADO</td>
                                        <td>m²</td>
                                        <td>6,00</td>
                                        <td>2.252,40</td>
                                    </tr>                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h3>Adicionar etapa</h3>
                    <div class="row">
                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>Item</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success btn-fill pull-right">Adicionar</button>
                        </div>
                    </div>
                    <h3>Adicionar composição</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pesquisar composição</label>
                                <input type="text" placeholder="Pesquise a composição por nome ou código" class="form-control">                                
                            </div>
                            <button type="submit" class="btn btn-success btn-fill pull-right">Adicionar</button>
                        </div>
                    </div>                    
                    <h3>Adicionar insumo</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pesquisar insumo</label>
                                <input type="text" placeholder="Pesquise o insumo por nome ou código" class="form-control">                                
                            </div>
                            <button type="submit" class="btn btn-success btn-fill pull-right">Adicionar</button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection