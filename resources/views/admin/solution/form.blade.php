<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'solution Header' }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($solution->header) ? $solution->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('shortDescription') ? 'has-error' : ''}}">
    <label for="shortDescription" class="control-label">{{ 'Short Description' }}</label>
    <textarea name="shortDescription"  class="form-control" cols="30" rows="10" required>
        {{ isset($solution->shortDescription) ? $solution->shortDescription : ''}}
    </textarea>
    {!! $errors->first('shortDescription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($solution->description) ? $solution->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($solution->image) ? $solution->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload solution Image" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($solution->image) ? asset(Storage::url($solution->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
