@extends('layouts.dashboard')

@section('content')
<div class="card strpied-tabled-with-hover">
    <div class="card-header ">
        <h4 class="card-title">Orçamentos</h4>
        <p class="card-category">Orçamentos criados na sua empresa</p>
    </div>
    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <th>Código</th>
                <th>Descrição</th>
                <th>Criado em</th>
                <th>Estado</th>
                <th>Data SINAPI</th>
                <th>Atualizar</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Orçamento 1</td>
                    <td>12/09/2018 08:31</td>
                    <td>Maranhão</td>
                    <td>08/2018</td>
                    <td>
                        <button class="btn btn-info btn-fill">Atualizar orçamento</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Orçamento 2</td>
                    <td>12/09/2018 08:31</td>
                    <td>Maranhão</td>
                    <td>08/2018</td>
                    <td>
                        <button class="btn btn-info btn-fill">Atualizar orçamento</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Orçamento 3</td>
                    <td>12/09/2018 08:31</td>
                    <td>Maranhão</td>
                    <td>08/2018</td>
                    <td>
                        <button class="btn btn-info btn-fill">Atualizar orçamento</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Orçamento 4</td>
                    <td>12/09/2018 08:31</td>
                    <td>Maranhão</td>
                    <td>08/2018</td>
                    <td>
                        <button class="btn btn-info btn-fill">Atualizar orçamento</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection