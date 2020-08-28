@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Visualizar Lead</h3>
                </div>
                <div class="card-body">

                    <p><b>Nome:</b> {{ $item['name'] }}</p>
                    <p><b>E-mail:</b> {{ $item['email'] }}</p>
                    <p><b>Telefone:</b> {{ $item['phone'] }}</p>
                    <p><b>Data:</b> {{ $item['created_at'] ? date('d/m/Y H:i', strtotime($item['created_at'])) : '-' }}</p>
                    <p><b>Última URL:</b> {{ $item['http_referrer'] }}</p>
                    <p><b>Mensagem:</b> {!! nl2br($item['message']) !!}</p>

                    <a class="fa-pull-right" href="{{ route('leads.index') }}">
                        <button type="button" class="btn btn-default btn-sm">
                            Voltar
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
