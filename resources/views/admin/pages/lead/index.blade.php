@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listar Leads</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="20%">#</th>
                                <th width="20%">Data</th>
                                <th width="20%">Nome</th>
                                <th width="20%">E-mail</th>
                                <th width="10%">Telefone</th>
                                <th width="5%">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item['created_at'] ? date('d/m/Y H:i', strtotime($item['created_at'])) : '-' }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['phone'] }}</td>
                                    <td>
                                        <a href="{{ route('leads.show', ['id' => $item['id']]) }}"
                                            class="btn btn-sm btn-info">Visualizar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @include('admin/includes/pagination')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
