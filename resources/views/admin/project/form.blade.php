<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'Header' }}</label>
    <input class="form-control" name="header" type="text" id="header"
        value="{{ isset($project->header) ? $project->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
<label for="category" class="control-label">{{ 'Category' }}</label>
<select name="category_id" class="form-control selectpicker">
    <option value="Category">Select Category</option>
    @foreach (Helpers::findAll('category') as $item)
    {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}
    {{-- <option value="{{$item->id}}" @if(isset($project->id))
    @if($project->category_id == $item->id) selected @endif
    @endif>
    {{$item->name}}
    </option>
    @endforeach
</select> --}}
{{-- <input class="form-control" name="category" type="text" id="category" value="{{ isset($project->category) ? $project->category : ''}}"
required> --}}
{{-- {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div> --}}
{{-- <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
<label for="category_id" class="control-label">{{ __('Catagory') }}</label>
<input class="form-control" name="category_id" type="number" id="category_id"
    value="{{ isset($project->category_id) ? $project->category_id : ''}}" required>
{!! $errors->first('category_id', '<p class="text-danger">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>

    <textarea name="description" id="editor" cols="30" rows="10" required>
        {{ isset($project->description) ? $project->description : ''}}
    </textarea>
    {{-- <input class="form-control" name="description" type="text" id="description" value="{{ isset($project->description) ? $project->description : ''}}"
    required> --}}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('client_name') ? 'has-error' : ''}}">
<label for="client_name" class="control-label">{{ 'Client Name' }}</label>
<input class="form-control" name="client_name" type="text" id="client_name"
    value="{{ isset($project->client_name) ? $project->client_name : ''}}" required>
{!! $errors->first('client_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <input class="form-control" name="location" type="text" id="location"
        value="{{ isset($project->location) ? $project->location : ''}}" required>
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="text" id="year"
        value="{{ isset($project->year) ? $project->year : ''}}" required>
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'link' }}</label>
    <input class="form-control" name="link" type="text" id="link"
        value="{{ isset($project->link) ? $project->link : ''}}" required>
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
    <label for="value" class="control-label">{{ 'Value' }}</label>
    <input class="form-control" name="value" type="text" id="value"
        value="{{ isset($project->value) ? $project->value : ''}}">
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="thumbnailUpload" name="thumbnail" accept=".png, .jpg, .jpeg">
            <input type='text' name="old_thumbnail"
                value="{{ isset($project->thumbnail) ? $project->thumbnail : ''}}" />
            <label for="thumbnailUpload">
                <label for="thumbnail" class="control-label img_lavel">{{ "Upload Thumbnail" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
            <div id="thumbnailPreview"
                style="background-image: url({{(isset($project->thumbnail) ? asset(Storage::url($project->thumbnail)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

{{-- <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
<div class="avatar-upload">
    <div class="avatar-edit">
        <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg">
        <input type='text' name="old_image" value="{{ isset($project->image) ? $project->image : ''}}" />
        <label for="imageUpload">
            <label for="image" class="control-label img_lavel">{{ "Upload Project Image" }}</label>
        </label>
    </div>
    <div class="avatar-preview">
        <div id="imagePreview"
            style="background-image: url({{(isset($project->image) ? asset(Storage::url($project->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
        </div>
    </div>
</div>
</div> --}}

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
