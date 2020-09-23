@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listar Produtos</h3>
                    <div class="card-tools">
                        <a href="{{ route('products.create') }}">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fas fa-plus-circle"></i>
                                Adicionar
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="10%">#</th>
                                <th width="10%">Categoria</th>
                                <th width="10%">SubCategoria</th>
                                <th width="20%">Título</th>
                                <th width="20%">Imagem</th>
                                <th width="10%">Preço</th>
                                <th width="20%">Ordem</th>
                                <th width="20%">Destaque</th>
                                <th width="20%">Status</th>
                                <th width="10%">-</th>
                                <th width="10%">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td>{{ $item->subcategory->category['title'] }}</td>
                                    <td>{{ $item->subcategory['title'] }}</td>
                                    <td>{{ $item['title'] }}</td>
                                    <td><img height="50px"
                                            src="{{ url("storage/{$item['image']}") }}"
                                            /></td>
                                    <td>R$ {{ formatMoney($item['price']) }}</td>
                                    <td>{{ $item['order'] }}</td>
                                    <td>{{ $item['featured'] ? 'Sim' : 'Não' }}
                                    <td>{{ $item['status'] ? 'Ativo' : 'Inativo' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', ['id' => $item['id']]) }}"
                                            class="btn btn-sm btn-info">Editar</a>
                                    </td>
                                    <td>
                                        <button type="button"
                                            onclick="confirmDelete('{{ route('products.delete', ['id' => $item['id']]) }}')"
                                            class="btn btn-sm btn-danger">Excluir</button>
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

@section('js')
<script>
    function confirmDelete(url) {

        if (confirm('Deseja deletar esse registro?')) {

            var form = document.createElement("form");

            var element1 = document.createElement("input");
            var element2 = document.createElement("input");

            form.method = "POST";
            form.action = url;

            element1.value = "DELETE";
            element1.name = "_method";

            form.appendChild(element1);

            element2.value = "{{ csrf_token() }}";
            element2.name = "_token";
            form.appendChild(element2);

            document.body.appendChild(form);

            form.submit();

        }

    }

</script>
@stop
