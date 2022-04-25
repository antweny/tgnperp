<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $phase)
        <option value={{$phase->id}} {{old($name,$value) == $phase->id ? 'selected' : ''}}>
            {{ $phase->name }}
        </option>
    @endforeach
</select>
