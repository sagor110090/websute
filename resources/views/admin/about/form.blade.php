<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'About Header' }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($about->header) ? $about->header : ''}}"   >
    {!! $errors->first('header', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ 'Short Description' }}</label>
    <textarea name="short_description"  class="form-control" cols="30" rows="10"   >
        {{ isset($about->short_description) ? $about->short_description : ''}}
    </textarea>
    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10"   >
        {{ isset($about->description) ? $about->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook Link' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($about->facebook) ? $about->facebook : ''}}"   >
    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}">
    <label for="twitter" class="control-label">{{ 'Twitter Link' }}</label>
    <input class="form-control" name="twitter" type="text" id="twitter" value="{{ isset($about->twitter) ? $about->twitter : ''}}"   >
    {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkedin') ? 'has-error' : ''}}">
    <label for="linkedin" class="control-label">{{ 'Linkedin Link' }}</label>
    <input class="form-control" name="linkedin" type="text" id="linkedin" value="{{ isset($about->linkedin) ? $about->linkedin : ''}}"   >
    {!! $errors->first('linkedin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('instagram') ? 'has-error' : ''}}">
    <label for="instagram" class="control-label">{{ 'Instagram Link' }}</label>
    <input class="form-control" name="instagram" type="text" id="instagram" value="{{ isset($about->instagram) ? $about->instagram : ''}}"   >
    {!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('youtube') ? 'has-error' : ''}}">
    <label for="youtube" class="control-label">{{ 'Youtubbe Link' }}</label>
    <input class="form-control" name="youtube" type="text" id="youtube" value="{{ isset($about->youtube) ? $about->youtube : ''}}"   >
    {!! $errors->first('youtube', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('google') ? 'has-error' : ''}}">
    <label for="google" class="control-label">{{ 'Google Plus Link' }}</label>
    <input class="form-control" name="google" type="text" id="google" value="{{ isset($about->google) ? $about->google : ''}}"   >
    {!! $errors->first('google', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('skype') ? 'has-error' : ''}}">
    <label for="skype" class="control-label">{{ 'Skype Link' }}</label>
    <input class="form-control" name="skype" type="text" id="skype" value="{{ isset($about->skype) ? $about->skype : ''}}"   >
    {!! $errors->first('skype', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($about->image) ? $about->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload about Image" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($about->image) ? asset(Storage::url($about->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
