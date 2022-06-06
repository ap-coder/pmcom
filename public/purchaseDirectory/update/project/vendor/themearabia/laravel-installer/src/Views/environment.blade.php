@extends('vendor.installer.layouts.master')
@section('template_title')
    {{ trans('installer_messages.environment.wizard.templateTitle') }}
@endsection
@section('title')
    {!! trans('installer_messages.environment.wizard.title') !!}
@endsection
@section('container')
    <div class="tabs tabs-full">
        <form method="post" action="{{ route('LaravelInstaller::environmentSaveWizard') }}" class="tabs-wrap">
            <div>

                @if($errors->has('license'))
                <div class="alert alert-danger" id="error_alert">{{$errors->first('license')}}</div>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="app_admin_folder" value="admincp">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('app_name') ? ' has-error ' : '' }}">
                            <label for="app_name">{{ trans('installer_messages.environment.wizard.form.app_name_label') }}</label>
                            <input type="text" name="app_name" id="app_name" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.app_name_placeholder') }}" />
                            @if ($errors->has('app_name'))<span class="error-block">{{ $errors->first('app_name') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('app_url') ? ' has-error ' : '' }}">
                            <label for="app_url">{{ trans('installer_messages.environment.wizard.form.app_url_label') }}</label>
                            <input type="url" name="app_url" id="app_url" class="form-control" value="http://localhost" placeholder="{{ trans('installer_messages.environment.wizard.form.app_url_placeholder') }}" />
                            @if ($errors->has('app_url'))<span class="error-block">{{ $errors->first('app_url') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('app_client') ? ' has-error ' : '' }}">
                            <label for="app_client">{{ trans('installer_messages.environment.wizard.form.app_client_label') }}</label>
                            <input type="text" name="app_client" id="app_client" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.app_client_placeholder') }}" />
                            @if ($errors->has('app_client'))<span class="error-block">{{ $errors->first('app_client') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('app_license') ? ' has-error ' : '' }}">
                            <label for="app_license">{{ trans('installer_messages.environment.wizard.form.app_license_label') }}</label>
                            <input type="text" name="app_license" id="app_license" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.app_license_placeholder') }}" />
                            @if ($errors->has('app_license'))<span class="error-block">{{ $errors->first('app_license') }}</span>@endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('admin_username') ? ' has-error ' : '' }}">
                            <label for="admin_username">{{ trans('installer_messages.environment.wizard.form.admin_username_label') }}</label>
                            <input type="text" name="admin_username" id="admin_username" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.admin_username_placeholder') }}" />
                            @if ($errors->has('admin_username'))<span class="error-block">{{ $errors->first('admin_username') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('admin_email') ? ' has-error ' : '' }}">
                            <label for="admin_email">{{ trans('installer_messages.environment.wizard.form.admin_email_label') }}</label>
                            <input type="email" name="admin_email" id="admin_email" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.admin_email_placeholder') }}" />
                            @if ($errors->has('admin_email'))<span class="error-block">{{ $errors->first('admin_email') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('admin_password') ? ' has-error ' : '' }}">
                            <label for="admin_password">{{ trans('installer_messages.environment.wizard.form.admin_password_label') }}</label>
                            <input type="password" name="admin_password" id="admin_password" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.admin_password_placeholder') }}" />
                            @if ($errors->has('admin_password'))<span class="error-block">{{ $errors->first('admin_password') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('admin_pincode') ? ' has-error ' : '' }}">
                            <label for="admin_pincode">{{ trans('installer_messages.environment.wizard.form.admin_pincode_label') }}</label>
                            <input type="password" name="admin_pincode" id="admin_pincode" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.admin_pincode_placeholder') }}" />
                            @if ($errors->has('admin_pincode'))<span class="error-block">{{ $errors->first('admin_pincode') }}</span>@endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_connection') ? ' has-error ' : '' }}">
                            <label for="database_connection">{{ trans('installer_messages.environment.wizard.form.db_connection_label') }}</label>
                            <select name="database_connection" class="form-select" id="database_connection">
                                <option value="mysql" selected>{{ trans('installer_messages.environment.wizard.form.db_connection_label_mysql') }}</option>
                                <option value="sqlite">{{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlite') }}</option>
                                <option value="pgsql">{{ trans('installer_messages.environment.wizard.form.db_connection_label_pgsql') }}</option>
                                <option value="sqlsrv">{{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlsrv') }}</option>
                            </select>
                            @if ($errors->has('database_connection'))<span class="error-block">{{ $errors->first('database_connection') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_hostname') ? ' has-error ' : '' }}">
                            <label for="database_hostname">{{ trans('installer_messages.environment.wizard.form.db_host_label') }}</label>
                            <input type="text" name="database_hostname" id="database_hostname" class="form-control" value="127.0.0.1" placeholder="{{ trans('installer_messages.environment.wizard.form.db_host_placeholder') }}" />
                            @if ($errors->has('database_hostname'))<span class="error-block">{{ $errors->first('database_hostname') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_port') ? ' has-error ' : '' }}">
                            <label for="database_port">{{ trans('installer_messages.environment.wizard.form.db_port_label') }}</label>
                            <input type="number" name="database_port" id="database_port" class="form-control" value="3306" placeholder="{{ trans('installer_messages.environment.wizard.form.db_port_placeholder') }}" />
                            @if ($errors->has('database_port'))
                                <span class="error-block">
                                    {{ $errors->first('database_port') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_name') ? ' has-error ' : '' }}">
                            <label for="database_name">{{ trans('installer_messages.environment.wizard.form.db_name_label') }}</label>
                            <input type="text" name="database_name" id="database_name" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.db_name_placeholder') }}" />
                            @if ($errors->has('database_name'))<span class="error-block">{{ $errors->first('database_name') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_username') ? ' has-error ' : '' }}">
                            <label for="database_username">{{ trans('installer_messages.environment.wizard.form.db_username_label') }}</label>
                            <input type="text" name="database_username" id="database_username" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.db_username_placeholder') }}" />
                            @if ($errors->has('database_username'))<span class="error-block">{{ $errors->first('database_username') }}</span>@endif
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group {{ $errors->has('database_password') ? ' has-error ' : '' }}">
                            <label for="database_password">{{ trans('installer_messages.environment.wizard.form.db_password_label') }}</label>
                            <input type="password" name="database_password" id="database_password" class="form-control" value="" placeholder="{{ trans('installer_messages.environment.wizard.form.db_password_placeholder') }}" />
                            @if ($errors->has('database_password'))<span class="error-block">{{ $errors->first('database_password') }}</span>@endif
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <button class="button" type="submit">{{ trans('installer_messages.environment.wizard.form.buttons.install') }}</button>
                </div>

            </div>
        </form>
    </div>
@endsection
