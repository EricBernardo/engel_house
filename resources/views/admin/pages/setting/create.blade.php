@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Configurações</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <form role="form" action="{{ route('settings.store') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputNameSite">Nome do site</label>
                            <input type="text" name="name_site" class="form-control" id="inputNameSite" placeholder="Nome do site" value="{{ request()->old('name_site') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" name="email" class="form-control" id="inputEmail" placeholder="E-mail" value="{{ request()->old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputLogo">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="logo" id="inputLogo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFavicon">Favicon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="favicon" id="inputFavicon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputWhatsapp">Whatsapp</label>
                            <input type="text" name="whatsapp" class="form-control" id="inputWhatsapp" placeholder="Whatsapp" value="{{ request()->old('whatsapp') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputWhatsappAds">Whatsapp Ads</label>
                            <input type="text" name="whatsapp_ads" class="form-control" id="inputWhatsappAds" placeholder="Whatsapp" value="{{ request()->old('whatsapp') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPhone1">Telefone</label>
                            <input type="text" name="phone_1" class="form-control" id="inputPhone1" placeholder="Telefone" value="{{ request()->old('phone_1') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPhone2">Telefone 2</label>
                            <input type="text" name="phone_2" class="form-control" id="inputPhone2" placeholder="Telefone 2" value="{{ request()->old('phone_2') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPhone3">Telefone 3</label>
                            <input type="text" name="phone_3" class="form-control" id="inputPhone3" placeholder="Telefone 3" value="{{ request()->old('phone_3') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneAds">Telefone Ads</label>
                            <input type="text" name="phone_ads" class="form-control" id="inputPhoneAds" placeholder="Telefone 3" value="{{ request()->old('phone_3') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <textarea name="address" id="inputAddress" rows="5" class="form-control" placeholder="Endereço">{{ request()->old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputGoogleMaps">Google Maps</label>
                            <textarea name="google_maps" id="inputGoogleMaps" rows="5" class="form-control" placeholder="Google Maps">{{ request()->old('google_maps') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputFacebook">Link do facebook</label>
                            <textarea name="facebook_link" id="inputFacebook" rows="5" class="form-control" placeholder="Link do facebook">{{ request()->old('facebook_link') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputCopyRight">Copyright</label>
                            <input type="text" name="copyright" class="form-control" id="inputCopyRight" placeholder="Copyright" value="{{ request()->old('copyright') }}">
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
                        <a class="fa-pull-right" href="{{ route('settings.index') }}">
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
