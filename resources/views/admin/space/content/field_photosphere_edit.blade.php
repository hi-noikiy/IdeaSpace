<div class="form-group {{ $errors->has($field_id)?'has-error':'' }}">
    <div>
        <label class="control-label large">{{ $form['#label'] }}</label>
    </div>
    <div class="form-control-add-file text-center {{ $errors->has($field_id)?'has-error':'' }}">

        <input type="hidden" @if (isset($form['#content']['#id'])) value="{{ $form['#content']['#id'] }}" @else value="" @endif name="{{ $field_id }}" class="photosphere-id">

        <div class="photosphere-add" @if (isset($form['#content']['#value'])) style="display:none" @endif>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#assets" data-opentab="#photospheres-tab">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library_photospheres.add_photosphere') }}
            </button>
        </div>

        <div class="photosphere-edit" @if (!isset($form['#content']['#value'])) style="display:none" @endif>
            <div class="photosphere-placeholder" style="margin-bottom:10px"><img src="@if (isset($form['#content']['#value'])) {{ $form['#content']['#value'] }} @endif" class="img-responsive center-block"></div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assets" data-opentab="#photospheres-tab">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ trans('template_asset_library_photospheres.edit_photosphere_btn') }}
            </button>
            <button type="button" class="btn btn-primary remove-photosphere-btn">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ trans('template_asset_library_photospheres.remove_photosphere_btn') }}
            </button>
        </div>

    </div>
    <span class="info-block">{{ $form['#help'] }} @foreach ($form['#file-extension'] as $file_ext) <span class="label label-warning">{{ $file_ext }}</span>@endforeach @if ($form['#required'] == true) <span class="label label-danger">{{ trans('template_fields.required') }}</span>@endif</span>
    {!! $errors->has($field_id)?$errors->first($field_id, '<span class="help-block">:message</span>'):'' !!}
</div>

