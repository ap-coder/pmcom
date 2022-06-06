<div class="tacf-input mt-3">
    <div class="tacf-repeater">
        <table class="tacf-table">
            <tbody class="tacf-ui-sortable">
                @if(is_array($socials) and count($socials))
                    @php $key = 0; @endphp
                    @foreach($socials as $item)
                    <tr class="tacf-row">
                        <td class="tacf-field tacf-col-item">
                            <h3 class="tacf-head-item">
                                <span class="tacf-title-item">{{admin_lang('title')}}: <span>{{$item['title']}}</span></span> 
                                <span class="tacf-row-handle tacf-action-handle order ui-sortable-handle" title="{{admin_lang('move')}}"><i class="bx bx-move"></i></span>
                                <span class="tacf-remove" data-event="remove-row" title="{{admin_lang('remove')}}"><i class="bx bxs-trash-alt"></i></span>
                                @if($item['toggle']) <span class="tacf-collapse-button"><i class="fas fa-minus"></i></span> @else <span class="tacf-collapse-button"><i class="fas fa-plus"></i></span> @endif
                                <span class="tacf-status status-button status-button-switch" title="{{admin_lang('status')}}">
                                    <div class="form-check form-switch form-switch-sm form-switch-success" dir="ltr">
                                        <input class="form-check-input" type="checkbox" name="{{$input_name}}[{{$key}}][status]" value="1" @if(isset($item['status']) and $item['status']) checked="" @endif>
                                    </div>
                                </span>
                                <input type="hidden" class="tacf-toggle-input" name="{{$input_name}}[{{$key}}][toggle]" value="{{$item['toggle']}}">
                            </h3>
                            <div class="tacf-input tacf-toggle-content fadeIn @if(!$item['toggle']) d-none @endif">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{admin_lang('title')}}</label>
                                            <input type="text" name="{{$input_name}}[{{$key}}][title]" class="form-control tacf_toggle_title" value="{{$item['title']}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>{{admin_lang('url')}}</label>
                                            <input type="text" name="{{$input_name}}[{{$key}}][url]" class="form-control" value="{{$item['url']}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{admin_lang('icon')}}</label>
                                            <div class="megapanel-icon-select">
                                                <span class="megapanel-icon-preview"><i class="{{$item['icon']}}"></i></span>
                                                <button type="button" class="btn btn-primary waves-effect waves-light megapanel-icon-add" data-modal-title="{{admin_lang('icons')}}">{{admin_lang('changes')}}</button>
                                                <button type="button" class="btn  btn-danger waves-effect waves-light megapanel-icon-remove">{{admin_lang('remove')}}</button>
                                                <input type="hidden" name="{{$input_name}}[{{$key}}][icon]" value="{{$item['icon']}}" class="megapanel-icon-value tacf-input-key">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>{{admin_lang('icon_background')}}</label>
                                                    <input type="text" name="{{$input_name}}[{{$key}}][bgcolor]" value="{{$item['bgcolor']}}" class="form-control colorpicker" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>{{admin_lang('icon_color')}}</label>
                                                    <input type="text" name="{{$input_name}}[{{$key}}][color]" value="{{$item['color']}}" class="form-control colorpicker" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php $key++; @endphp
                    @endforeach
                @endif
                <tr class="tacf-row tacf-clone">
                    <td class="tacf-field tacf-col-item">
                        <h3 class="tacf-head-item">
                            <span class="tacf-title-item">{{admin_lang('title')}}: <span></span></span> 
                            <span class="tacf-row-handle tacf-action-handle order ui-sortable-handle" title="{{admin_lang('move')}}"><i class="bx bx-move"></i></span>
                            <span class="tacf-remove" data-event="remove-row" title="{{admin_lang('remove')}}"><i class="bx bxs-trash-alt"></i></span>
                            <span class="tacf-collapse-button"><i class="fas fa-minus"></i></span> 
                            <span class="tacf-status status-button status-button-switch" title="{{admin_lang('status')}}">
                                <div class="form-check form-switch form-switch-sm form-switch-success" dir="ltr">
                                    <input class="form-check-input tacf-input-key" type="checkbox" data-name="{{$input_name}}[{key}][status]" value="1" checked="">
                                </div>
                            </span>
                            <input type="hidden" class="tacf-input-key tacf-toggle-input" data-name="{{$input_name}}[{key}][toggle]" value="1">
                        </h3>
                        <div class="tacf-input tacf-toggle-content fadeIn">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{admin_lang('title')}}</label>
                                        <input type="text" data-name="{{$input_name}}[{key}][title]" class="form-control tacf-input-key tacf_toggle_title" />
                                    </div>
                                    <div class="form-group">
                                        <label>{{admin_lang('url')}}</label>
                                        <input type="text" data-name="{{$input_name}}[{key}][url]" class="form-control tacf-input-key" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{admin_lang('icon')}}</label>
                                        <div class="megapanel-icon-select">
                                            <span class="megapanel-icon-preview"><i class=""></i></span>
                                            <button type="button" class="btn btn-primary waves-effect waves-light megapanel-icon-add">{{admin_lang('changes')}}</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light megapanel-icon-remove">{{admin_lang('remove')}}</button>
                                            <input type="hidden" data-name="{{$input_name}}[{key}][icon]" class="megapanel-icon-value tacf-input-key">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>{{admin_lang('icon_background')}}</label>
                                                <input type="text" data-name="{{$input_name}}[{key}][bgcolor]" value="#f7f9fc" class="form-control tacf-input-colorpicker tacf-input-key" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>{{admin_lang('icon_color')}}</label>
                                                <input type="text" data-name="{{$input_name}}[{key}][color]" value="#555555" class="form-control tacf-input-colorpicker tacf-input-key" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <div class="tacf-actions mt-3">
            <a class="tacf-button button button-primary mb-2" href="#" data-event="add-row">{{admin_lang('add_new')}}</a>
        </div>
    </div>
</div>