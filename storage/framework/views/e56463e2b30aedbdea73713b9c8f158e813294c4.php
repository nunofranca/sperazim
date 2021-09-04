

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Empreendimentos')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Empreendimentos')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
			
			 <form class="form-horizontal" action="<?php echo e(route('admin.portfolio.update', $portfolio->id)); ?>" method="POST" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
			
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Principal')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.portfolio.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Voltar')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               
									
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Idioma')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control lang" name="language_id" id="blog_lan">
                                                <option value="" selected disabled>Selecione um Idioma</option>
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($lang->id); ?>" <?php echo e($portfolio->language_id == $lang->id ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('language_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Galeria ')); ?></label>
        
                                        <div class="col-sm-10">
                                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$slider->image)); ?>" alt="">
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="<?php echo e($slider->id); ?>" name="sliders[]"  value="<?php echo e($slider->id); ?>">
                                                    <label for="<?php echo e($slider->id); ?>"><?php echo e(__('Excluir')); ?></label>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="custom-file h80 drop-img mt-3">
                                                <label class="custom-file-label h80 " for="image"><h5 class="text-center"><?php echo e(__('Arraste e solte ou selecione várias imagens de uma vez')); ?></h5></label>
                                                <input type="file" multiple class="custom-file-input h80" name="image[]" id="image">
                                            </div>
                                            
                                            <?php if($errors->has('image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="featured_image" class="col-sm-2 control-label"><?php echo e(__('Fachada do Empreendimento')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mb-3 mw-400 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_image)); ?>" alt="">
                                            <div class="custom-file">
                                                <label for="featured_image" class="custom-file-label"><?php echo e(__('Escolha uma nova imagem')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="featured_image" id="featured_image">
                                            </div>
                                            <?php if($errors->has('featured_image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('featured_image')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: 245x420px.
                                            Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="featured_logo" class="col-sm-2 control-label"><?php echo e(__('Logo do Empreendimento')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mb-3 mw-400 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->featured_logo)); ?>" alt="">
                                            <div class="custom-file">
                                                <label for="featured_logo" class="custom-file-label"><?php echo e(__('Escolha uma nova imagem')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="featured_logo" id="featured_logo">
                                            </div>
                                            <?php if($errors->has('featured_logo')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('featured_logo')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: 300X300px.
                                                Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label"><?php echo e(__('Título')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="Título" value="<?php echo e($portfolio->title); ?>">
                                            <?php if($errors->has('title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="client_name" class="col-sm-2 control-label"><?php echo e(__('Bairro/Cidade')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="client_name" placeholder="Bairro/Cidade" value="<?php echo e($portfolio->client_name); ?>">
                                            <?php if($errors->has('client_name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('client_name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bcategory_id" class="col-sm-2 control-label"><?php echo e(__('Categoria')); ?><span class="text-danger">*</span></label>
                                
                                        <div class="col-sm-10">
                                            <select class="form-control" name="service_id" id="service_id">
                                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($service->id); ?>" <?php echo e($service->id == $portfolio->service_id ? 'selected' : ''); ?> ><?php echo e($service->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('service_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('service_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label"><?php echo e(__('Ativo/Inativo')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                               <option value="" selected disabled><?php echo e(__('Select a Status')); ?></option>
                                               <option value="0" <?php echo e($portfolio->status == 0 ? 'selected' : ''); ?> ><?php echo e(__('Inativo')); ?></option>
                                               <option value="1"  <?php echo e($portfolio->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Ativo')); ?></option>
                                              </select>
                                            <?php if($errors->has('status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="content" class="col-sm-2 control-label"><?php echo e(__('Conteúdo')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content" class="form-control summernote"  rows="4" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($portfolio->content); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="meta_keywords" class="col-sm-2 control-label"><?php echo e(__('Meta Palavras-chave')); ?></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="<?php echo e(__('Meta Palavras-chave')); ?>" value="<?php echo e($portfolio->meta_keywords); ?>">
                                            <?php if($errors->has('meta_keywords')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_keywords')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta_description" class="col-sm-2 control-label"><?php echo e(__('Meta Descrição')); ?></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Descrição')); ?>"  rows="4"><?php echo e($portfolio->meta_description); ?></textarea>
                                            <?php if($errors->has('meta_description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label"><?php echo e(__('Ordem')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Ordem')); ?>" value="<?php echo e($portfolio->serial_number); ?>">
                                            <?php if($errors->has('serial_number')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                
									
							</div>
						</div>	

						
								<div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Detalhes')); ?></h3>
								<div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">	
									<div class="form-group row">
                                        <label for="content2" class="col-sm-2 control-label"><?php echo e(__('O Edifício')); ?></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content2" class="form-control summernote"  rows="4" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($portfolio->content2); ?></textarea>
                                            <?php if($errors->has('content2')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('content2')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="content3" class="col-sm-2 control-label"><?php echo e(__('Os Apartamentos')); ?></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content3" class="form-control summernote"  rows="4" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($portfolio->content3); ?></textarea>
                                            <?php if($errors->has('content3')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('content3')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									
									
									
									
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Plantas ')); ?></label>
        
                                        <div class="col-sm-10">
                                            <?php $__currentLoopData = $sliders2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$slider2->image2)); ?>" alt="">
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="<?php echo e($slider2->id); ?>" name="sliders2[]"  value="<?php echo e($slider2->id); ?>">
                                                    <label for="<?php echo e($slider2->id); ?>"><?php echo e(__('Excluir')); ?></label>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="custom-file h80 drop-img mt-3">
                                                <label class="custom-file-label h80 " for="image2"><h5 class="text-center"><?php echo e(__('Arraste e solte ou selecione várias imagens de uma vez')); ?></h5></label>
                                                <input type="file" multiple class="custom-file-input h80" name="image2[]" id="image2">
                                            </div>
                                            
                                            <?php if($errors->has('image2')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('image2')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                        </div>
                                    </div>
								 

									<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Link Google Maps')); ?></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="portfolio_map" class="form-control" rows="5" placeholder="<?php echo e(__('Map Embed Link')); ?>"><?php echo e($portfolio->portfolio_map); ?></textarea>
                                            <?php if($errors->has('portfolio_map')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('portfolio_map')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									
									
									
									<div class="form-group row">
                                        <label for="content4" class="col-sm-2 control-label"><?php echo e(__('Texto Legal')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="content4" class="form-control summernote"  rows="4" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($portfolio->content4); ?></textarea>
                                            <?php if($errors->has('content4')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('content4')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
									
									<div class="form-group row">
                                        <label for="local" class="col-sm-2 control-label"><?php echo e(__('Local')); ?></label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="local" placeholder="Local" value="<?php echo e($portfolio->local); ?>">
                                        <?php if($errors->has('local')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('local')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                    </div>
									
									
									<div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Imagem de Fundo do Vídeo')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
											<img class="mb-2 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$portfolio->video_bg_image)); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="video_bg_image"><?php echo e(__('Escolha uma nova imagem')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="video_bg_image" id="video_bg_image">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                            <?php if($errors->has('video_bg_image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('video_bg_image ')); ?> </p>
                                            <?php endif; ?>
                                        </div>

                                    </div>
									
									
									<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Video Link')); ?></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="video_link" placeholder="<?php echo e(__('Video Link')); ?>" value="<?php echo e($portfolio->video_link); ?>">
                                            <?php if($errors->has('video_link')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('video_link')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
									
								     </div>
                                    </div>
									
									
							<div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Estágio da Obra')); ?></h3>
								<div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                            </div>
                            <!-- /.card-header -->
							
                            <div class="card-body">	
							
							<div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Fotos')); ?></label>
        
                                        <div class="col-sm-10">
                                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="edit-slider">
                                                <img class="mb-2 show-img img-demo" src="<?php echo e(asset('assets/front/img/portfolio/'.$slider->image)); ?>" alt="">
												
												<div class="mb-2">
												<input type="text" class="form-control" name="legenda_image1" placeholder="<?php echo e(__('Legenda')); ?>" value="<?php echo e($portfolio->legenda_image1); ?>">
												</div>
												
                                                <div class="icheck-danger d-inline mr-2">
                                                <input type="checkbox" id="<?php echo e($slider->id); ?>" name="sliders[]"  value="<?php echo e($slider->id); ?>">
                                                    <label for="<?php echo e($slider->id); ?>"><?php echo e(__('Excluir')); ?></label>
                                                </div>
												
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="custom-file h80 drop-img mt-3">
                                                <label class="custom-file-label h80 " for="image"><h5 class="text-center"><?php echo e(__('Arraste e solte ou selecione várias imagens de uma vez')); ?></h5></label>
                                                <input type="file" multiple class="custom-file-input h80" name="image[]" id="image">
                                            </div>
                                            
                                            <?php if($errors->has('image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Tamanho da imagem para melhor qualidade: Maximo de 1500px
                                            Somente imagens jpg, jpeg e png são permitidas.')); ?>

                                            </p>
                                        </div>
                                    </div>
															
									<div class="form-group row">
                                        <label for="local" class="col-sm-2 control-label"><?php echo e(__('Locação')); ?></label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="locacao" placeholder="Locação" value="<?php echo e($portfolio->locacao); ?>">
                                        <?php if($errors->has('locacao')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('locacao')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Fundação:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="fundacao" placeholder="Fundação" value="<?php echo e($portfolio->fundacao); ?>">
                                        <?php if($errors->has('fundacao')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('fundacao')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
									
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Estrutura:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="estrutura" placeholder="Estrutura" value="<?php echo e($portfolio->estrutura); ?>">
                                        <?php if($errors->has('estrutura')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('estrutura')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Alvenaria:')); ?></label>									
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="alvenaria" placeholder="Alvenaria" value="<?php echo e($portfolio->alvenaria); ?>">
                                        <?php if($errors->has('alvenaria')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('alvenaria')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Instalações:')); ?></label>
										<div class="col-sm-10">										
                                        <input type="text" class="form-control" name="instalacoes" placeholder="Instalações" value="<?php echo e($portfolio->instalacoes); ?>">
                                        <?php if($errors->has('instalacoes')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('instalacoes')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>

									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Revestimento Interno:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="rev_interno" placeholder="Revestimento Interno" value="<?php echo e($portfolio->rev_interno); ?>">
                                        <?php if($errors->has('rev_interno')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('rev_interno')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>

									<div class="form-group row">
									<label for="local" class="col-sm-2 control-label"><?php echo e(__('Revestimento Externo:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="rev_externo" placeholder="Revestimento Externo" value="<?php echo e($portfolio->rev_externo); ?>">
                                        <?php if($errors->has('rev_externo')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('rev_externo')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
									
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Cerâmica:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="ceramica" placeholder="Cerâmica" value="<?php echo e($portfolio->ceramica); ?>">
                                        <?php if($errors->has('ceramica')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('ceramica')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>	
										
									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Esquadrias:')); ?></label>									
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="esquadrias" placeholder="Esquadrias" value="<?php echo e($portfolio->esquadrias); ?>">
                                        <?php if($errors->has('esquadrias')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('esquadrias')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>

									<div class="form-group row">
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Pintura:')); ?></label>
										<div class="col-sm-10">
                                        <input type="text" class="form-control" name="pintura" placeholder="Pintura" value="<?php echo e($portfolio->pintura); ?>">
                                        <?php if($errors->has('pintura')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('pintura')); ?> </p>
                                        <?php endif; ?>
										</div>
									</div>
									
									<div class="form-group row">	
										<label for="local" class="col-sm-2 control-label"><?php echo e(__('Acabamento:')); ?></label>
										<div class="col-sm-10">									
                                        <input type="text" class="form-control" name="acabamento" placeholder="Acabamento" value="<?php echo e($portfolio->acabamento); ?>">
                                        <?php if($errors->has('acabamento')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first(acabamento)); ?> </p>
                                        <?php endif; ?>
										</div>
                                    </div>
									
									
									</div>
                                    </div>
										
										
				
                       
                       
							
                            <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?php echo e(__('Ativar / Desativar Sessões')); ?>

                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Galeria')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_galeria == '1' ? 'checked' : ''); ?> data-size="large" name="on_galeria" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_galeria')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_galeria')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Informações')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_info == '1' ? 'checked' : ''); ?> data-size="large" name="on_info" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_info')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_info')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Plantas/Mapa')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_plantas == '1' ? 'checked' : ''); ?> data-size="large" name="on_plantas" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_plantas')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_plantas')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Vídeo')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_video == '1' ? 'checked' : ''); ?> data-size="large" name="on_video" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_video')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_video')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Estágio da Obra')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_estagio == '1' ? 'checked' : ''); ?> data-size="large" name="on_estagio" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_estagio')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_estagio')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-5 control-label"><?php echo e(__('Contato')); ?></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" <?php echo e($portfolio->on_contato == '1' ? 'checked' : ''); ?> data-size="large" name="on_contato" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Ativo" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Inativo">
                                        <?php if($errors->has('on_contato')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('on_contato')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
								
    
                                    
							<div class="card card-primary card-outline">
                       
                            <!-- /.card-header -->
							
							
							
                            <div class="card-body">	

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Atualizar')); ?></button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\speranzini\core\resources\views/admin/portfolio/edit.blade.php ENDPATH**/ ?>