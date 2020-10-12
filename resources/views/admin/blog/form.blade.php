<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ __('Header') }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($blog->header) ? $blog->header : ''}}" required>
    {!! $errors->first('header', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('shortDescription') ? 'has-error' : ''}}">
    <label for="shortDescription" class="control-label">{{ 'Short Description' }}</label>
    <textarea name="shortDescription"  class="form-control" cols="30" rows="10" required>
        {{ isset($blog->shortDescription) ? $blog->shortDescription : ''}}
    </textarea>
    {!! $errors->first('shortDescription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea name="description" id="editor"   cols="30" rows="10" required>
        {{ isset($blog->description) ? $blog->description : ''}}
    </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tag') ? 'has-error' : ''}}">
    <label for="tag" class="control-label">{{ __('Tag') }}</label>
    <input class="form-control" name="tag" type="text" id="tag" value="{{ isset($blog->tag) ? $blog->tag : ''}}" required>
    {!! $errors->first('tag', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
    <label for="thumbnail" class="control-label">{{ __('Thumbnail') }}</label>
    <input class="form-control" name="thumbnail" type="file" id="thumbnail" value="{{ isset($blog->thumbnail) ? $blog->thumbnail : ''}}">
    <input type='text'  name="old_thumbnail" value="{{ isset($blog->thumbnail) ? $blog->thumbnail : ''}}" />
    {!! $errors->first('thumbnail', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($blog->image) ? $blog->image : ''}}">
    <input type='text'  name="old_image" value="{{ isset($blog->image) ? $blog->image : ''}}" />
    {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('blog_category_id') ? 'has-error' : ''}}">
    <label for="blog_category_id" class="control-label">{{ 'blog_category_id' }}</label>
    <select name="blog_category_id" class="form-control selectpicker">
        <option value="blog_category_id">Select blog_category_id</option>
        @foreach (Helpers::findAll('blog_categories') as $item)
    {{-- <option value="{{$item->id}}">{{$item->name}}</option> --}}
            <option value="{{$item->id}}" @if(isset($blog->id))
                @if($blog->blog_category_id  == $item->id) selected @endif
                @endif>
                {{$item->name}}
            </option>
        @endforeach
    </select>
    {{-- <input class="form-control" name="blog_category_id" type="text" id="blog_category_id" value="{{ isset($blog->blog_category_id) ? $blog->blog_category_id : ''}}"
    required> --}}
    {!! $errors->first('blog_category_id', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('blog_category_id') ? 'has-error' : ''}}">
    <label for="blog_category_id" class="control-label">{{ __('Blog Category Id') }}</label>
    <input class="form-control" name="blog_category_id" type="number" id="blog_category_id" value="{{ isset($blog->blog_category_id) ? $blog->blog_category_id : ''}}" required>
    {!! $errors->first('blog_category_id', '<p class="text-danger">:message</p>') !!}
</div> --}}


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
