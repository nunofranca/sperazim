@extends('admin.layout')

@section('content')
   <!-- Content Header (Page header) -->

   <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Bem-vindo novamente,') }} {{ Auth::guard('admin')->user()->name }} !</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">{{ __('Últimos Empreendimentos :') }}</h3>
                
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
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($portfolios as $id=>$portfolio)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td>
                                <img class="w-80" src="{{ asset('assets/front/img/portfolio/'.$portfolio->featured_logo) }}" alt="">
                            </td>
                            <td>
                                {{ $portfolio->title }}
                            </td> 
                            <td>
                                {{ $portfolio->service->title }}
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
      <!-- Main row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
