@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Add Modul')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Modul Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="/s" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ URL('/storemodul')}}" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Modul information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Mapel') }}</label>
                                    <input type="text" name="mapel" class="form-control form-control-alternative" placeholder="{{ __('Mapel') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Guru') }}</label>
                                    <input type="text" name="guru" class="form-control form-control-alternative" placeholder="{{ __('Guru') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Angkatan') }}</label>
                                    <select name="angkatan" class="form-control form-control-alternative">
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('File') }}</label>
                                    <input type="file" name="file" class="form-control form-control-alternative" placeholder="{{ __('file') }}" required autofocus>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection