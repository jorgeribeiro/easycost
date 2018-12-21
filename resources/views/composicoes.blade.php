@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Criação de composição</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Código da composição</label>
                                <input type="text" class="form-control" value="0000002">
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Tipo</label>
                                <input type="text" class="form-control">
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
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Unidade</label>
                                <input type="text" class="form-control" placeholder="m², m³">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control" value="Maranhão">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observação</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">Itens desta composição</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>Banco</th>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Tipo</th>
                                    <th>Unidade</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SINAPI</td>
                                        <td>92122</td>
                                        <td>ACABAMENTOS PARA FORRO (RODA-FORRO EM MADEIRA PINUS). AF_05/2017</td>
                                        <td>Acabamento</td>
                                        <td>M</td>
                                    </tr>
                                    <tr>
                                        <td>Própria</td>
                                        <td>000001</td>
                                        <td>ABRACADEIRA DE FIXACAO DE BRACOS DE LUMINARIAS DE 4" - FORNECIMENTO E INSTALACAO</td>
                                        <td>Auxiliar</td>
                                        <td>UN</td>
                                    </tr>                                
                                </tbody>
                            </table>
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