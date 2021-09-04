@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('Page Visibility') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item">{{ __('Page Visibility') }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="{{ route('admin.pagevisibility.update') }}" method="POST">
                    @csrf
                    
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Theme 1 Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Hero Slider') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_slider_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_slider_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_slider_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_slider_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Who We Are Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_who_we_are_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_who_we_are_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_who_we_are_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_who_we_are_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Intro Video Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_intro_video_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_intro_video_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_intro_video_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Service Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_service_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_service_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_service_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Why Choose Us Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_why_choose_us_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_why_choose_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_why_choose_us_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_why_choose_us_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Portfolio Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_portfolio_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_portfolio_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_portfolio_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Testimonial Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_testimonial_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_testimonial_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_testimonial_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Team Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_team_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_team_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_team_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Contact Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_contact_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_contact_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_contact_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Meet Us Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_meet_us_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_meet_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_meet_us_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_meet_us_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Blog Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_blog_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_blog_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_blog_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_blog_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Client Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t1_clint_section == '1' ? 'checked' : '' }} data-size="large" name="is_t1_clint_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t1_clint_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t1_clint_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Theme 2 Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Hero Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_hero_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_hero_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_hero_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_about_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_about_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_about_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_about_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Service Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_service_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_service_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_service_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Intro Video Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_intro_video_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_intro_video_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_intro_video_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Team Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_team_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_team_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_team_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Counter Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_counter_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_counter_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_counter_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_counter_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Testimonial Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_testimonial_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_testimonial_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_testimonial_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Contact Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_contact_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_contact_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_contact_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Faq Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_faq_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_faq_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_faq_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Quote Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_quote_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_quote_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_quote_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_quote_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('News Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_news_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_news_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_news_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_news_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Client Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t2_client_section == '1' ? 'checked' : '' }} data-size="large" name="is_t2_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t2_client_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t2_client_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Theme 3 Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Hero Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_hero_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_hero_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_hero_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Service Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_service_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_service_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_service_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Portfolio Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_portfolio_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_portfolio_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_portfolio_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Testmonial Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_testimonial_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_testimonial_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_testimonial_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Faq Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_faq_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_faq_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_faq_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Team Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_team_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_team_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_team_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Meet Us Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_meet_us_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_meet_us_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_meet_us_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_meet_us_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('News Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_news_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_news_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_news_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_news_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Client Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t3_client_section == '1' ? 'checked' : '' }} data-size="large" name="is_t3_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t3_client_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t3_client_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Theme 4 Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Hero Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_hero_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_hero_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_hero_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Client Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_client_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_client_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_client_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_client_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_about_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_about_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_about_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_about_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Feature Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_feature_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_feature_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_feature_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_feature_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Who We Are Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_who_we_are_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_who_we_are_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_who_we_are_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_who_we_are_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Intro Video Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_intro_video_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_intro_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_intro_video_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_intro_video_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Portfolio Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_portfolio_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_portfolio_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_portfolio_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Counter Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_counter_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_counter_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_counter_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_counter_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Testmonial Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_testmonial_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_testmonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_testmonial_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_testmonial_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Faq Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_faq_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_faq_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_faq_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_faq_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Contact Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_t4_contact_section == '1' ? 'checked' : '' }} data-size="large" name="is_t4_contact_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_t4_contact_section'))
                                            <p class="text-danger"> {{ $errors->first('is_t4_contact_section') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Inner Page Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About Page') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->about_page == '1' ? 'checked' : '' }} data-size="large" name="about_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('about_page'))
                                            <p class="text-danger"> {{ $errors->first('about_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About - About Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->about_about == '1' ? 'checked' : '' }} data-size="large" name="about_about" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('about_about'))
                                            <p class="text-danger"> {{ $errors->first('about_about') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About - Who we Are Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->about_w_w_a == '1' ? 'checked' : '' }} data-size="large" name="about_w_w_a" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('about_w_w_a'))
                                            <p class="text-danger"> {{ $errors->first('about_w_w_a') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About - Choose Us Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->about_choose_us == '1' ? 'checked' : '' }} data-size="large" name="about_choose_us" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('about_choose_us'))
                                            <p class="text-danger"> {{ $errors->first('about_choose_us') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('About - About history Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->about_history == '1' ? 'checked' : '' }} data-size="large" name="about_history" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('about_history'))
                                            <p class="text-danger"> {{ $errors->first('about_history') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Service Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->service_page == '1' ? 'checked' : '' }} data-size="large" name="service_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('service_page'))
                                            <p class="text-danger"> {{ $errors->first('service_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Portfolio Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->poerfolio_page == '1' ? 'checked' : '' }} data-size="large" name="poerfolio_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('poerfolio_page'))
                                            <p class="text-danger"> {{ $errors->first('poerfolio_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Package Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->package_page == '1' ? 'checked' : '' }} data-size="large" name="package_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('package_page'))
                                            <p class="text-danger"> {{ $errors->first('package_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Team Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->team_page == '1' ? 'checked' : '' }} data-size="large" name="team_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('team_page'))
                                            <p class="text-danger"> {{ $errors->first('team_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Faq Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->faq_page == '1' ? 'checked' : '' }} data-size="large" name="faq_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('faq_page'))
                                            <p class="text-danger"> {{ $errors->first('faq_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Blog Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->blog_page == '1' ? 'checked' : '' }} data-size="large" name="blog_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('blog_page'))
                                            <p class="text-danger"> {{ $errors->first('blog_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Contact Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->contact_page == '1' ? 'checked' : '' }} data-size="large" name="contact_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('contact_page'))
                                            <p class="text-danger"> {{ $errors->first('contact_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Quote Section') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->quote_page == '1' ? 'checked' : '' }} data-size="large" name="quote_page" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('quote_page'))
                                            <p class="text-danger"> {{ $errors->first('quote_page') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ __('Other Visibility') }}
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                  </div>
                                </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Social Share (blog & product)') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_blog_share_links == '1' ? 'checked' : '' }} data-size="large" name="is_blog_share_links" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_blog_share_links'))
                                            <p class="text-danger"> {{ $errors->first('is_blog_share_links') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Cooki Alert') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_cooki_alert == '1' ? 'checked' : '' }} data-size="large" name="is_cooki_alert" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_cooki_alert'))
                                            <p class="text-danger"> {{ $errors->first('is_cooki_alert') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('WhatsApp Button') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_whatsapp == '1' ? 'checked' : '' }} data-size="large" name="is_whatsapp" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_whatsapp'))
                                            <p class="text-danger"> {{ $errors->first('is_whatsapp') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 control-label">{{ __('Phone Call Button') }}<span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" {{ $commonsetting->is_call_button == '1' ? 'checked' : '' }} data-size="large" name="is_call_button" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                        @if ($errors->has('is_call_button'))
                                            <p class="text-danger"> {{ $errors->first('is_call_button') }} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- /.col -->
    </div>
</section>

@endsection
