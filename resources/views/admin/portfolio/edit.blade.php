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
			
			 <form class="form-horizontal" action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
			
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Principal') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.portfolio.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Voltar') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               
									
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Idioma') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control lang" name="language_id" id="blog_lan">
                                                <option value="" selected disabled>Selecione um Idioma</option>
                                                @foreach($langs as $lang)
                                                    <option value="{{$lang->id}}" {{ $portfolio->language_id == $lang->id ? 'selected' : '' }} >{{$lang->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('language_id'))
                                                <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Galeria ') }}</label>
        
                                        <div class="col-sm-10">
                                            @foreach ($sliders as $slider)
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$slider->image) }}" alt="">
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="{{ $slider->id }}" name="sliders[]"  value="{{ $slider->id }}">
                                                    <label for="{{ $slider->id }}">{{ __('Excluir') }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="custom-file h80 drop-img mt-3">
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
                                        <label for="featured_image" class="col-sm-2 control-label">{{ __('Fachada do Empreendimento') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mb-3 mw-400 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_image) }}" alt="">
                                            <div class="custom-file">
                                                <label for="featured_image" class="custom-file-label">{{ __('Escolha uma nova imagem') }}</label>
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
                                        <label for="featured_logo" class="col-sm-2 control-label">{{ __('Logo do Empreendimento') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mb-3 mw-400 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_logo) }}" alt="">
                                            <div class="custom-file">
                                                <label for="featured_logo" class="custom-file-label">{{ __('Escolha uma nova imagem') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="featured_logo" id="featured_logo">
                                            </div>
                                            @if ($errors->has('featured_logo'))
                                                <p class="text-danger"> {{ $errors->first('featured_logo') }} </p>
                                            @endif
                                            <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: 300X300px.
                                                Somente imagens jpg, jpeg e png são permitidas.') }}
                                            </p>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label">{{ __('Título') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="Título" value="{{ $portfolio->title }}">
                                            @if ($errors->has('title'))
                                                <p class="text-danger"> {{ $errors->first('title') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="client_name" class="col-sm-2 control-label">{{ __('Bairro/Cidade') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="client_name" placeholder="Bairro/Cidade" value="{{ $portfolio->client_name }}">
                                            @if ($errors->has('client_name'))
                                                <p class="text-danger"> {{ $errors->first('client_name') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bcategory_id" class="col-sm-2 control-label">{{ __('Categoria') }}<span class="text-danger">*</span></label>
                                
                                        <div class="col-sm-10">
                                            <select class="form-control" name="service_id" id="service_id">
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}" {{ $service->id == $portfolio->service_id ? 'selected' : '' }} >{{ $service->title }}</option>
                                                @endforeach
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
                                               <option value="" selected disabled>{{ __('Select a Status') }}</option>
                                               <option value="0" {{ $portfolio->status == 0 ? 'selected' : '' }} >{{ __('Inativo') }}</option>
                                               <option value="1"  {{ $portfolio->status == 1 ? 'selected' : '' }}>{{ __('Ativo') }}</option>
                                              </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="content" class="col-sm-2 control-label">{{ __('Conteúdo') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content" class="form-control summernote"  rows="4" placeholder="{{ __('Description') }}">{{ $portfolio->content }}</textarea>
                                            @if ($errors->has('content'))
                                                <p class="text-danger"> {{ $errors->first('content') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="meta_keywords" class="col-sm-2 control-label">{{ __('Meta Palavras-chave') }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="{{ __('Meta Palavras-chave') }}" value="{{ $portfolio->meta_keywords }}">
                                            @if ($errors->has('meta_keywords'))
                                                <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta_description" class="col-sm-2 control-label">{{ __('Meta Descrição') }}</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" placeholder="{{ __('Meta Descrição') }}"  rows="4">{{ $portfolio->meta_description }}</textarea>
                                            @if ($errors->has('meta_description'))
                                                <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label">{{ __('Ordem') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Ordem') }}" value="{{ $portfolio->serial_number }}">
                                            @if ($errors->has('serial_number'))
                                                <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                
									
							</div>
						</div>	

						
								<div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Detalhes') }}</h3>
								<div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">	
									<div class="form-group row">
                                        <label for="content2" class="col-sm-2 control-label">{{ __('O Edifício') }}</label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content2" class="form-control summernote"  rows="4" placeholder="{{ __('Description') }}">{{ $portfolio->content2 }}</textarea>
                                            @if ($errors->has('content2'))
                                                <p class="text-danger"> {{ $errors->first('content2') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="content3" class="col-sm-2 control-label">{{ __('Os Apartamentos') }}</label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content3" class="form-control summernote"  rows="4" placeholder="{{ __('Description') }}">{{ $portfolio->content3 }}</textarea>
                                            @if ($errors->has('content3'))
                                                <p class="text-danger"> {{ $errors->first('content3') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									
									
									
									
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Plantas ') }}</label>
        
                                        <div class="col-sm-10">
                                            @foreach ($sliders2 as $slider2)
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$slider2->image2) }}" alt="">
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="{{ $slider2->id }}" name="sliders2[]"  value="{{ $slider2->id }}">
                                                    <label for="{{ $slider2->id }}">{{ __('Excluir') }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="custom-file h80 drop-img mt-3">
                                                <label class="custom-file-label h80 " for="image2"><h5 class="text-center">{{ __('Arraste e solte ou selecione várias imagens de uma vez') }}</h5></label>
                                                <input type="file" multiple class="custom-file-input h80" name="image2[]" id="image2">
                                            </div>
                                            
                                            @if ($errors->has('image2'))
                                                <p class="text-danger"> {{ $errors->first('image2') }} </p>
                                            @endif
                                            <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.') }}
                                            </p>
                                        </div>
                                    </div>
								 

									<div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Link Google Maps') }}</label>
        
                                        <div class="col-sm-10">
                                            <textarea name="portfolio_map" class="form-control" rows="5" placeholder="{{ __('Map Embed Link') }}">{{ $portfolio->portfolio_map }}</textarea>
                                            @if ($errors->has('portfolio_map'))
                                                <p class="text-danger"> {{ $errors->first('portfolio_map') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									
									
									
									<div class="form-group row">
                                        <label for="content4" class="col-sm-2 control-label">{{ __('Texto Legal') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content4" class="form-control summernote"  rows="4" placeholder="{{ __('Description') }}">{{ $portfolio->content4 }}</textarea>
                                            @if ($errors->has('content4'))
                                                <p class="text-danger"> {{ $errors->first('content4') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
									
									<div class="form-group row">
                                        <label for="local" class="col-sm-2 control-label">{{ __('Local') }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="local" placeholder="Local" value="{{ $portfolio->local }}">
                                        @if ($errors->has('local'))
                                            <p class="text-danger"> {{ $errors->first('local') }} </p>
                                        @endif
                                    </div>
                                    </div>
									
									
									<div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Imagem de Fundo do Vídeo') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
											<img class="mb-2 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$portfolio->video_bg_image) }}" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="video_bg_image">{{ __('Escolha uma nova imagem') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="video_bg_image" id="video_bg_image">
                                            </div>
                                            <p class="help-block text-info">{{ __('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.') }}
                                            </p>
                                            @if ($errors->has('video_bg_image'))
                                                <p class="text-danger"> {{ $errors->first('video_bg_image ') }} </p>
                                            @endif
                                        </div>

                                    </div>
									
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Video Link') }}</label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="video_link" placeholder="{{ __('Video Link') }}" value="{{ $portfolio->video_link }}">
                                            @if ($errors->has('video_link'))
                                                <p class="text-danger"> {{ $errors->first('video_link') }} </p>
                                            @endif
                                        </div>
                                    </div>
									
								     </div>
                                    </div>
									
									
							<div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Estágio da Obra') }}</h3>
								<div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                            </div>
                            <!-- /.card-header -->
							
                            <div class="card-body">	
							
							<div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Fotos') }}</label>
        
                                        <div class="col-sm-10">
                                            @foreach ($sliders as $slider)
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="{{ asset('assets/front/img/portfolio/'.$slider->image) }}" alt="">
												
												<div class="mb-2">
												<input type="text" class="form-control" name="legenda_image1" placeholder="{{ __('Legenda') }}" value="{{ $portfolio->legenda_image1 }}">
												</div>
												
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="{{ $slider->id }}" name="sliders[]"  value="{{ $slider->id }}">
                                                    <label for="{{ $slider->id }}">{{ __('Excluir') }}</label>
                                                </div>
												
                                            </div>
                                            @endforeach
                                            <div class="custom-file h80 drop-img mt-3">
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
                                        <label for="local" class="col-sm-2 control-label">{{ __('Locação') }}</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="locacao" placeholder="Locação" value="{{ $portfolio->locacao }}">
                                        @if ($errors->has('locacao'))
                                            <p class="text-danger"> {{ $errors->first('locacao') }} </p>
                                        @endif
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Fundação:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="fundacao" placeholder="Fundação" value="{{ $portfolio->fundacao }}">
                                        @if ($errors->has('fundacao'))
                                            <p class="text-danger"> {{ $errors->first('fundacao') }} </p>
                                        @endif
										</div>
									</div>
									
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Estrutura:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="estrutura" placeholder="Estrutura" value="{{ $portfolio->estrutura }}">
                                        @if ($errors->has('estrutura'))
                                            <p class="text-danger"> {{ $errors->first('estrutura') }} </p>
                                        @endif
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Alvenaria:') }}</label>									
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="alvenaria" placeholder="Alvenaria" value="{{ $portfolio->alvenaria }}">
                                        @if ($errors->has('alvenaria'))
                                            <p class="text-danger"> {{ $errors->first('alvenaria') }} </p>
                                        @endif
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Instalações:') }}</label>
										<div class="col-sm-10">										
                                        <input type="text" class="form-control" name="instalacoes" placeholder="Instalações" value="{{ $portfolio->instalacoes }}">
                                        @if ($errors->has('instalacoes'))
                                            <p class="text-danger"> {{ $errors->first('instalacoes') }} </p>
                                        @endif
										</div>
									</div>

									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Revestimento Interno:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="rev_interno" placeholder="Revestimento Interno" value="{{ $portfolio->rev_interno }}">
                                        @if ($errors->has('rev_interno'))
                                            <p class="text-danger"> {{ $errors->first('rev_interno') }} </p>
                                        @endif
										</div>
									</div>

									<div class="form-group row">
									<label for="local" class="col-sm-2 control-label">{{ __('Revestimento Externo:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="rev_externo" placeholder="Revestimento Externo" value="{{ $portfolio->rev_externo }}">
                                        @if ($errors->has('rev_externo'))
                                            <p class="text-danger"> {{ $errors->first('rev_externo') }} </p>
                                        @endif
										</div>
									</div>
									
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Cerâmica:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="ceramica" placeholder="Cerâmica" value="{{ $portfolio->ceramica }}">
                                        @if ($errors->has('ceramica'))
                                            <p class="text-danger"> {{ $errors->first('ceramica') }} </p>
                                        @endif
										</div>
									</div>	
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Esquadrias:') }}</label>									
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="esquadrias" placeholder="Esquadrias" value="{{ $portfolio->esquadrias }}">
                                        @if ($errors->has('esquadrias'))
                                            <p class="text-danger"> {{ $errors->first('esquadrias') }} </p>
                                        @endif
										</div>
									</div>

									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label">{{ __('Pintura:') }}</label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="pintura" placeholder="Pintura" value="{{ $portfolio->pintura }}">
                                        @if ($errors->has('pintura'))
                                            <p class="text-danger"> {{ $errors->first('pintura') }} </p>
                                        @endif
										</div>
									</div>
									
									<div class="form-group row">	
										<label for="local" class="col-sm-2 control-label">{{ __('Acabamento:') }}</label>
										<div class="col-sm-10">									
                                        <input type="text" class="form-control" name="acabamento" placeholder="Acabamento" value="{{ $portfolio->acabamento }}">
                                        @if ($errors->has('acabamento'))
                                            <p class="text-danger"> {{ $errors->first(acabamento) }} </p>
                                        @endif
										</div>
                                    </div>
									
									
									</div>
                                    </div>
										
										
				
                       
                       
							
                            <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Ativar / Desativar Sessões') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Galeria') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_galeria == '1' ? 'checked' : '' }} data-size="large" name="on_galeria" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_galeria'))
                                            <p class="text-danger"> {{ $errors->first('on_galeria') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Informações') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_info == '1' ? 'checked' : '' }} data-size="large" name="on_info" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_info'))
                                            <p class="text-danger"> {{ $errors->first('on_info') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Plantas/Mapa') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_plantas == '1' ? 'checked' : '' }} data-size="large" name="on_plantas" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_plantas'))
                                            <p class="text-danger"> {{ $errors->first('on_plantas') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Vídeo') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_video == '1' ? 'checked' : '' }} data-size="large" name="on_video" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_video'))
                                            <p class="text-danger"> {{ $errors->first('on_video') }} </p>
                                        @endif
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Estágio da Obra') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_estagio == '1' ? 'checked' : '' }} data-size="large" name="on_estagio" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_estagio'))
                                            <p class="text-danger"> {{ $errors->first('on_estagio') }} </p>
                                        @endif
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Contato') }}</label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $portfolio->on_contato == '1' ? 'checked' : '' }} data-size="large" name="on_contato" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        @if ($errors->has('on_contato'))
                                            <p class="text-danger"> {{ $errors->first('on_contato') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
								
    
                                    
							<div class="card card-primary card-outline">
                       
                            <!-- /.card-header -->
							
							
							
                            <div class="card-body">	

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-block">{{ __('Atualizar') }}</button>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
						 </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
