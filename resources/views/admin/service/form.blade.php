<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'Service Header' }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($service->header) ? $service->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('shortDescription') ? 'has-error' : ''}}">
    <label for="shortDescription" class="control-label">{{ 'Short Description' }}</label>
    <textarea name="shortDescription"  class="form-control" cols="30" rows="10" required>
        {{ isset($service->shortDescription) ? $service->shortDescription : ''}}
    </textarea>
    {!! $errors->first('shortDescription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($service->description) ? $service->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($service->image) ? $service->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload Service Image" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($service->image) ? asset(Storage::url($service->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
