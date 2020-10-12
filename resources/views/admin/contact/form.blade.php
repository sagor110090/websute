<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'header' }}</label>
    <input class="form-control" name="header" type="text" id="header"
        value="{{ isset($contact->header) ? $contact->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:contact</p>') !!}
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone"
        value="{{ isset($contact->phone) ? $contact->phone : ''}}" required>
    {!! $errors->first('phone', '<p class="help-block">:contact</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'address' }}</label>
    <input class="form-control" name="address" type="text" id="address"
        value="{{ isset($contact->address) ? $contact->address : ''}}" required>
    {!! $errors->first('address', '<p class="help-block">:contact</p>') !!}
</div>




<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
