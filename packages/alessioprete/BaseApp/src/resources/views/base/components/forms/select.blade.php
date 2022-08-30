<div class="form-group mb-2">
    <label class="control-label" for="{{$field}}">{{$label}} Banana</label>
    <select id="{{$field}}" name="{{$field}}" class="form-select {{ $errors->has($field) ? ' is-invalid' : '' }}">
        @foreach($item as $el)
            <option value="{{$el}}">{{$el}}</option>
        @endforeach
    </select>
    @error($field)
    <span class="invalid-feedback">
            <strong>{{ $errors->first($field) }}</strong>
        </span>
    @enderror
</div>
