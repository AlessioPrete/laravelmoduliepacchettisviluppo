<div class="form-check form-check-inline">
    <label for="{{$label}}"><input type="checkbox" class="form-check-input" value="{{$label}}" name="role[]"
        @if(isset($check))
            @foreach($check as $item)
                @if($item->name == $label) checked
                @endif
            @endforeach
        @endif>
    {{$label}}</label>
</div>
