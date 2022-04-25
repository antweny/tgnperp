<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $type)
        <option value={{$type->id}} {{old($name,$value) == $type->id ? 'selected' : ''}}>
            {{ $type->name }}
        </option>
    @endforeach
</select>
