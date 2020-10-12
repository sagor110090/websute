<div class="form-group {{ $errors->has('pricing_name') ? 'has-error' : ''}}">
    <label for="pricing_name" class="control-label">{{ __('Pricing  Name') }}</label>
    <input class="form-control" name="pricing_name" type="text" id="pricing_name" value="{{ isset($pricinglist->pricing_name) ? $pricinglist->pricing_name : ''}}" required>
    {!! $errors->first('pricing_name', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_description') ? 'has-error' : ''}}">
    <label for="short_description" class="control-label">{{ __('Short Description') }}</label>
    <input class="form-control" name="short_description" type="text" id="short_description" value="{{ isset($pricinglist->short_description) ? $pricinglist->short_description : ''}}" required>
    {!! $errors->first('short_description', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ __('Price') }}</label>
    <input class="form-control" name="price" type="text" id="price" value="{{ isset($pricinglist->price) ? $pricinglist->price : ''}}" required>
    {!! $errors->first('price', '<p class="text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? __('Update') : __('Create') }}">
</div>
