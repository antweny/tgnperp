<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $positionMode)
        <option value={{$positionMode->id}} {{old($name,$value) == $positionMode->id ? 'selected' : ''}}>
            {{ $positionMode->name }}
        </option>
    @endforeach
</select>
