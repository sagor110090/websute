<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($message->name) ? $message->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}">
    <label for="subject" class="control-label">{{ 'Subject' }}</label>
    <input class="form-control" name="subject" type="text" id="subject" value="{{ isset($message->subject) ? $message->subject : ''}}" required>
    {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mail') ? 'has-error' : ''}}">
    <label for="mail" class="control-label">{{ 'Mail' }}</label>
    <input class="form-control" name="mail" type="text" id="mail" value="{{ isset($message->mail) ? $message->mail : ''}}" required>
    {!! $errors->first('mail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($message->phone) ? $message->phone : ''}}" required>
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
    <label for="message" class="control-label">{{ 'Short Description' }}</label>
    <textarea name="message"  class="form-control" cols="30" rows="10" required>
        {{ isset($message->message) ? $message->message : ''}}
    </textarea>
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
