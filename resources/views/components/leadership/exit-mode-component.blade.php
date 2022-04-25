<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $exitMode)
        <option value={{$exitMode->id}} {{old($name,$value) == $exitMode->id ? 'selected' : ''}}>
            {{ $exitMode->name }}
        </option>
    @endforeach
</select>
