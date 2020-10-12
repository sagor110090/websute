<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <label for="text" class="control-label">{{ __('Text') }}</label>
    <textarea name="text" class="form-control" id="editor" cols="30" rows="10" required>
        {{ isset($testimonial->text) ? $testimonial->text : ''}}
    </textarea>
    {!! $errors->first('text', '<p class="text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit"
        value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
