<div class="form-group mb-2">
    <label class="control-label" for="{{$field}}">{{$label}}</label>
    <input id="{{$id ?? ''}}" class="form-control {{ $errors->has($field) ? ' is-invalid' : '' }}" type="{{$type ?? 'text'}}" name="{{$field}}" placeholder="{{$ph}}"
           value="{{old($field) ?? $value}}">
    @error($field)
        <span class="invalid-feedback">
            <strong>{{ $errors->first($field) }}</strong>
        </span>
    @enderror
</div>
