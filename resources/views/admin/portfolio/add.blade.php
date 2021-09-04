@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Empreendimentos') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Empreendimentos') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Adicionar Empreendimento') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.portfolio.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Voltar') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group row">
                                       <label class="col-sm-2 control-label">{{ __('Idioma') }}<span class="text-danger">*</span></label>
       
                                       <div class="col-sm-10">
                                           <select class="form-control lang" name="language_id" id="portfolio_lan">
                                               <option value="" selected disabled>Selecione um idioma</option>
                                               @foreach($langs as $lang)
                                                   <option value="{{$lang->id}}" >{{$lang->name}}</option>
                                               @endforeach
                                           </select>
                                           @if ($errors->has('language_id'))
                                               <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                           @endif
                                       </div>
                                   </div>

                                <div class="form-group row">
                                    <label  class="col-sm-2 control-label">{{ __('Galeria') }}</label>
    
                                    <div class="col-sm-10">
                                        <div class="custom-file h80 drop-img">
                                            <label class="custom-file-label h80 " for="image"><h5 class="text-center">{{ __('Arraste e solte ou selecione várias imagens de uma vez') }}</h5></label>
                                            <input type="file" multiple class="custom-file-input h80" name="image[]" id="image">
                                        </div>
    
                                        @if ($errors->has('image'))
                                            <p class="text-danger"> {{ $errors->first('image') }} </p>
                                        @endif
                                        <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 control-label">{{ __('Fachada do Empreendimento') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="featured_image">{{ __('Escolha uma nova imagem') }}</label>
                                            <input type="file" class="custom-file-input up-img" name="featured_image" id="featured_image">
                                        </div>
                                        @if ($errors->has('featured_image'))
                                            <p class="text-danger"> {{ $errors->first('featured_image') }} </p>
                                        @endif
                                        <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: 245x420px.
                                            Somente imagens jpg, jpeg e png são permitidas.') }}
                                        </p>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Logo do Empreendimento') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                            <div class="custom-file">
												<label class="custom-file-label" for="featured_logo">{{ __('Escolha uma nova imagem') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="featured_logo" id="featured_logo">
                                            </div>
                                            @if ($errors->has('featured_logo'))
                                                <p class="text-danger"> {{ $errors->first('featured_logo') }} </p>
                                            @endif
                                            <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: 160X120px.
                                                Somente imagens jpg, jpeg e png são permitidas.') }}
                                            </p>
                                        </div>
                                    </div>
    
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 control-label">{{ __('Título') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" placeholder="Título" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <p class="text-danger"> {{ $errors->first('title') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_name" class="col-sm-2 control-label">{{ __('Bairro/Cidade') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="client_name" placeholder="Bairro/Cidade" value="{{ old('client_name') }}">
                                        @if ($errors->has('client_name'))
                                            <p class="text-danger"> {{ $errors->first('client_name') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="service_id" class="col-sm-2 control-label">{{ __('Categoria') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <select class="form-control" name="service_id" id="bcategory_id">
                                        </select>
                                        @if ($errors->has('service_id'))
                                            <p class="text-danger"> {{ $errors->first('service_id') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 control-label">{{ __('Ativo/Inativo') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                           <option value="0">{{ __('Inativo') }}</option>
                                           <option value="1" selected>{{ __('Ativo') }}</option>
                                          </select>
                                        @if ($errors->has('status'))
                                            <p class="text-danger"> {{ $errors->first('status') }} </p>
                                        @endif
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 control-label">{{ __('Conteúdo') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <textarea name="content" class="form-control summernote"  rows="4" placeholder="{{ __('Description') }}">{{ old('content') }}</textarea>
                                        @if ($errors->has('content'))
                                            <p class="text-danger"> {{ $errors->first('content') }} </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="meta_keywords" class="col-sm-2 control-label">{{ __('Meta Palavras-chave') }}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="{{ __('Meta Palavras-chave') }}" value="{{ old('meta_keywords') }}">
                                        @if ($errors->has('meta_keywords'))
                                            <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_description" class="col-sm-2 control-label">{{ __('Meta Descrição') }}</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="meta_description" placeholder="{{ __('Meta Descrição') }}"  rows="4">{{ old('meta_description') }}</textarea>
                                        @if ($errors->has('meta_description'))
                                            <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 control-label">{{ __('Ordem') }}<span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Ordem') }}" value="0">
                                        @if ($errors->has('serial_number'))
                                            <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                        @endif
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Salvar') }}</button>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

