<div class="col-4">
    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
        <label for="image" class="control-label">{{ __('image') }}</label><br>
        <input type='file' name="image" accept=".png, .jpg, .jpeg,.zip,.mp4" onchange="showMyImage(this,'image')"
            value="{{ isset($gallery->image) ? $gallery->image : old('image')}}">
        <input type='text' name="oldimage" value="{{ isset($gallery->image) ? $gallery->image : ''}}" hidden>
        {{-- <div class="avatar-upload">
                <div class="avatar-preview">
                    <img id="image" class="avatar-preview"
                        src="{{ isset($gallery->image) ? Storage::url($gallery->image) : asset('upload.png')}}"
        alt="image" />
    </div>
</div> --}}
{!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
<div class="invalid-feedback"> What's your image?</div>
</div>
</div>



<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit"
        value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
