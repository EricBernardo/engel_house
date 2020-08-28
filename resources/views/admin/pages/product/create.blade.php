@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Produtos</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <form role="form" action="{{ route('products.store') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputTitle">Título</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Título" value="{{ request()->old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputImage">Imagem</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" id="inputImage">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImageMobile">Imagem mobile</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image_mobile" id="inputImageMobile">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Descrição</label>
                            <textarea name="description" id="inputDescription" rows="5" class="form-control" placeholder="Descrição">{{ request()->old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputOrder">Ordem</label>
                            <input type="number" name="order" class="form-control" id="inputOrder" placeholder="Ordem"
                                value="{{ request()->old('order') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputActive">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ request()->old('status') === '1' ? 'selected' : ''}}>Ativo</option>
                                <option value="0" {{ request()->old('status') === '0' ? 'selected' : ''}}>Inativo</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                        <a class="fa-pull-right" href="{{ route('products.index') }}">
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
