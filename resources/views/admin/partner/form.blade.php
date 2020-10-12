<div class="form-group {{ $errors->has('info') ? 'has-error' : ''}}">
    <label for="info" class="control-label">{{ __('Info') }}</label>
    <textarea class="form-control" name="info" cols="30" rows="10"
        required>{{ isset($partner->info) ? $partner->info : ''}}</textarea>
    {{-- <input class="form-control" name="info" type="text" id="info" value="{{ isset($partner->info) ? $partner->info : ''}}"
    required> --}}
    {!! $errors->first('info', '<p class="text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit"
        value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
