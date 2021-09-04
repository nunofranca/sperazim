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
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Empreendimentos') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title">{{ __('Empreendimentos:') }}</h3>
                    <div class="card-tools d-flex">
                        <div class="d-inline-block mr-4">
                            <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                @foreach($langs as $lang)
                                    <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}} >{{$lang->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('admin.portfolio.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> {{ __('Adicionar Novo') }}
                        </a>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="idtable" class="table table-bordered table-striped data_table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Imagem') }}</th>
                                <th>{{ __('Título') }}</th>
                                <th>{{ __('Categoria') }}</th>
                                <th>{{ __('Ordem') }}</th>
                                <th>{{ __('Status ') }}</th>
                                <th>{{ __('Ações') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($portfolios as $id=>$portfolio)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>
                                    <img class="w-80" src="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_image) }}" alt="">
                                </td>
                                <td>
                                    {{ $portfolio->title }}
                                </td> 
                                <td>
                                    {{ $portfolio->service->title }}
                                </td> 
                                <td>
                                    {{ $portfolio->serial_number }}
                                </td> 
                                <td>
                                        @if($portfolio->status == 1)
                                            <span class="badge badge-success">{{ __('Publicado') }}</span>
                                        @else
                                            <span class="badge badge-warning">{{ __('Desativado') }}</span>
                                        @endif
                                        
                                    </td>
                                <td>
                                    <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>{{ __('Editar') }}</a>
                                    <form  id="deleteform" class="d-inline-block" action="{{ route('admin.portfolio.delete', $portfolio->id ) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                        <i class="fas fa-trash"></i>{{ __('Excluir') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

