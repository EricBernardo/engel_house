@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar SubCategorias</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <form role="form"
                        action="{{ route('subcategories.update', ['id' => $item['id']]) }}"
                        method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="inputTitle">Categoria</label>
                            <select name="category_id" class="form-control">
                                <option value="">Selecione</option>
                                @foreach ($categories as $category)
                                    <option {{$item['category_id'] == $category['id'] ? 'selected' : ''}} value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Título</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Título"
                                value="{{ $item['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="inputOrder">Ordem</label>
                            <input type="number" name="order" class="form-control" id="inputOrder" placeholder="Ordem"
                                value="{{ $item['order'] }}">
                        </div>
                        <div class="form-group">
                            <label for="inputActive">Status</label>
                            <select class="form-control" name="status">
                                <option value="1"
                                    {{ $item['status'] ? 'selected' : '' }}>
                                    Ativo</option>
                                <option value="0"
                                    {{ !$item['status'] ? 'selected' : '' }}>
                                    Inativo</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                        <a class="fa-pull-right" href="{{ route('subcategories.index') }}">
                            <button type="button" class="btn btn-default btn-sm">
                                Voltar
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
