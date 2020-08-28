@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Destaques</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <form role="form"
                        action="{{ route('home_products.update', ['id' => $item['id']]) }}"
                        method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="inputTitle">Título</label>
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Título"
                                value="{{ $item['title'] }}">
                        </div>
                        <div class="form-group">
                            <label for="inputImage">Imagem</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" id="inputImage">
                                </div>
                            </div>
                            <img height="200px"
                                src="{{ url("storage/{$item['image']}") }}"
                                />
                        </div>
                        <div class="form-group">
                            <label for="inputImageMobile">Imagem mobile</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image_mobile" id="inputImageMobile">
                                </div>
                            </div>
                            @if($item['image_mobile'])
                                <img height="200px"
                                src="{{ url("storage/{$item['image_mobile']}") }}"
                                />
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="inputUrl">Url</label>
                            <textarea name="url" id="inputUrl" rows="5" class="form-control" placeholder="Url">{{ $item['url'] }}</textarea>
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
                        <a class="fa-pull-right" href="{{ route('home_products.index') }}">
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
