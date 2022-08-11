<div class="form-check form-check-inline col-2">
    <label for="{{$label}}"><input type="checkbox" class="form-check-input" value="{{$label}}" name="{{$name ?? 'role[]'}}"
        @if(isset($check))
            @foreach($check as $item)
                @if($item->name == $label) checked
                @endif
            @endforeach
        @endif>
    {{$label}}</label>
</div>
