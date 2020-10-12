<div class="form-group {{ $errors->has('slider_large_title') ? 'has-error' : ''}}">
    <label for="slider_large_title" class="control-label">{{ 'Slider Large Title' }}</label>
    <input class="form-control" name="slider_large_title" type="text" id="slider_large_title" value="{{ isset($slider->slider_large_title) ? $slider->slider_large_title : ''}}" required>
    {!! $errors->first('slider_large_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slider_small_title') ? 'has-error' : ''}}">
    <label for="slider_small_title" class="control-label">{{ 'Slider Small Title' }}</label>
    <input class="form-control" name="slider_small_title" type="text" id="slider_small_title" value="{{ isset($slider->slider_small_title) ? $slider->slider_small_title : ''}}" required>
    {!! $errors->first('slider_small_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('video_link') ? 'has-error' : ''}}">
    <label for="video_link" class="control-label">{{ 'Video Link' }}</label>
    <input class="form-control" name="video_link" type="text" id="video_link" value="{{ isset($slider->video_link) ? $slider->video_link : ''}}" required>
    {!! $errors->first('video_link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($slider->image) ? $slider->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload Slider Image" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($slider->image) ? asset(Storage::url($slider->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
