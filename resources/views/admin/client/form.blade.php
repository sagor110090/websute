<div class="form-group {{ $errors->has('client_name') ? 'has-error' : ''}}">
    <label for="client_name" class="control-label">{{ 'Client Name' }}</label>
    <input class="form-control" name="client_name" type="text" id="client_name" value="{{ isset($client->client_name) ? $client->client_name : ''}}" required>
    {!! $errors->first('client_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Client Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($client->address) ? $client->address : ''}}" required>
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('service') ? 'has-error' : ''}}">
    <label for="service" class="control-label">{{ 'Service' }}</label>
    <input class="form-control" name="service" type="text" id="service" value="{{ isset($client->service) ? $client->service : ''}}" required>
    {!! $errors->first('service', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="link" class="control-label">{{ 'client link' }}</label>
    <input class="form-control" name="link" type="text" id="link" value="{{ isset($client->link) ? $client->link : ''}}" required>
    {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($client->image) ? $client->image : ''}}" />
            <label for="imageUpload">
                <label for="image" class="control-label img_lavel">{{ "Upload client Image" }}</label>
            </label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($client->image) ? asset(Storage::url($client->image)) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
