@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Perfil</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="text" class="form-control" placeholder="Nome completo" value="Jorge Luis Melo Ribeiro">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Empresa</label>
                                <input type="text" class="form-control" disabled="" placeholder="Empresa" value="EasyCost">
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Nome de usuário</label>
                                <input type="text" class="form-control" placeholder="Nome de usuário" value="jlmribeiro">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" placeholder="Email" value="joorgemelo@gmail.com">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control" placeholder="Endereço" value="Rua 38, Quadra 18, Casa 4C, Bequimão">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" placeholder="Cidade" value="São Luís">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>País</label>
                                <input type="text" class="form-control" placeholder="Country" value="Brasil">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>CEP</label>
                                <input type="number" class="form-control" placeholder="CEP">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Atualizar perfil</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection