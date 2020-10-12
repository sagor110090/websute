<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($our_team->name) ? $our_team->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
    <label for="designation" class="control-label">{{ 'Designation' }}</label>
    <input class="form-control" name="designation" type="text" id="designation" value="{{ isset($our_team->designation) ? $our_team->designation : ''}}" required>
    {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($our_team->facebook) ? $our_team->facebook : ''}}" required>
    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}">
    <label for="twitter" class="control-label">{{ 'Twitter' }}</label>
    <input class="form-control" name="twitter" type="text" id="twitter" value="{{ isset($our_team->twitter) ? $our_team->twitter : ''}}" required>
    {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('google_plus') ? 'has-error' : ''}}">
    <label for="google_plus" class="control-label">{{ 'Google+' }}</label>
    <input class="form-control" name="google_plus" type="text" id="google_plus" value="{{ isset($our_team->google_plus) ? $our_team->google_plus : ''}}" required>
    {!! $errors->first('google_plus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('linkedin') ? 'has-error' : ''}}">
    <label for="linkedin" class="control-label">{{ 'Linkedin' }}</label>
    <input class="form-control" name="linkedin" type="text" id="linkedin" value="{{ isset($our_team->linkedin) ? $our_team->linkedin : ''}}" required>
    {!! $errors->first('linkedin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($our_team->image) ? $our_team->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload Mamber's Picture" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($our_team->image) ? asset(Storage::url($our_team->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
