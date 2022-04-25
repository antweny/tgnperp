<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $individual)
        <option value={{$individual->id}} {{old($name,$value) == $individual->id ? 'selected' : ''}}>
            {{ $individual->full_name }}
        </option>
    @endforeach
</select>
