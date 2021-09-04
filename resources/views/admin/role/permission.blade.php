@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Role') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Role') }}</li>
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
                        <h3 class="card-title mt-1">{{ __('Add Role Permissions') }}</h3>
                        <div class="card-tools d-flex">
                            <a href="{{ route('admin.role.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.role.permissions.update', $role->id) }}" method="POST">
                            @csrf
                            @php
                            $permissions = $role->permissions;
                            if (!empty($role->permissions)) {
                              $permissions = json_decode($permissions, true);
                              // dd($permissions);
                            }
                          @endphp
          
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="General Setting" id="p1"  @if(is_array($permissions) && in_array('General Setting', $permissions)) checked @endif>
                                        <label for="p1">
                                            General Setting
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Home" id="p2"  @if(is_array($permissions) && in_array('Home', $permissions)) checked @endif>
                                        <label for="p2">
                                            Home
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="About" id="p3"  @if(is_array($permissions) && in_array('About', $permissions)) checked @endif>
                                        <label for="p3">
                                            About
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Package" id="p4"  @if(is_array($permissions) && in_array('Package', $permissions)) checked @endif>
                                        <label for="p4">
                                            Package
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Quote" id="p5"  @if(is_array($permissions) && in_array('Quote', $permissions)) checked @endif>
                                        <label for="p5">
                                            Quote
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Service" id="p6"  @if(is_array($permissions) && in_array('Service', $permissions)) checked @endif>
                                        <label for="p6">
                                            Service
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Contact" id="p7"  @if(is_array($permissions) && in_array('Contact', $permissions)) checked @endif>
                                        <label for="p7">
                                            Contact
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Portfolio" id="p8"  @if(is_array($permissions) && in_array('Portfolio', $permissions)) checked @endif>
                                        <label for="p8">
                                            Portfolio
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Blog" id="p9"  @if(is_array($permissions) && in_array('Blog', $permissions)) checked @endif>
                                        <label for="p9">
                                            Blog
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Role Management" id="p90"  @if(is_array($permissions) && in_array('Role Management', $permissions)) checked @endif>
                                        <label for="p90">
                                            Role Management
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Subscribers" id="p10"  @if(is_array($permissions) && in_array('Subscribers', $permissions)) checked @endif>
                                        <label for="p10">
                                            Subscribers
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Footer" id="p11"  @if(is_array($permissions) && in_array('Footer', $permissions)) checked @endif>
                                        <label for="p11">
                                            Footer
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Dynamic Page" id="p12"  @if(is_array($permissions) && in_array('Dynamic Page', $permissions)) checked @endif>
                                        <label for="p12">
                                            Dynamic Page
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Language" id="p13"  @if(is_array($permissions) && in_array('Language', $permissions)) checked @endif>
                                        <label for="p13">
                                            Language
                                        </label>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" name="permissions[]" value="Clear Cache" id="p14"  @if(is_array($permissions) && in_array('Clear Cache', $permissions)) checked @endif>
                                        <label for="p14">
                                            Clear Cache
                                        </label>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
@endsection
