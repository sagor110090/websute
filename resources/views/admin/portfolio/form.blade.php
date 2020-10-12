<div class="form-group {{ $errors->has('project_name') ? 'has-error' : ''}}">
    <label for="project_name" class="control-label">{{ __('Project Name') }}</label>
    <input class="form-control" name="project_name" type="text" id="project_name" value="{{ isset($portfolio->project_name) ? $portfolio->project_name : ''}}" required>
    {!! $errors->first('project_name', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('porject_description') ? 'has-error' : ''}}">
    <label for="porject_description" class="control-label">{{ __('Porject Description') }}</label>
    <input class="form-control" name="porject_description" type="text" id="porject_description" value="{{ isset($portfolio->porject_description) ? $portfolio->porject_description : ''}}" required>
    {!! $errors->first('porject_description', '<p class="text-danger">:message</p>') !!}
</div>

    

    <div class="col-4">
        <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
            <label for="image" class="control-label">{{ __('image') }}</label><br>
            <input type='file' name="image" accept=".png, .jpg, .jpeg,.zip,.mp4" onchange="showMyImage(this,'image')"
                value="{{ isset($portfolio->image) ? $portfolio->image : old('image')}}">
            <input type='text' name="oldimage" value="{{ isset($portfolio->image) ? $portfolio->image : ''}}" hidden>
            <div class="avatar-upload">
                <div class="avatar-preview">
                    <img id="image" class="avatar-preview"
                        src="{{ isset($portfolio->image) ? Storage::url($portfolio->image) : asset('upload.png')}}"
                        alt="image" />
                </div>
            </div>
            {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
            <div class="invalid-feedback"> What's your image?</div>
        </div>
    </div>



<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
