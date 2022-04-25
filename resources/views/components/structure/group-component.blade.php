<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $group)
        <option value={{$group->id}} {{old($name,$value) == $group->id ? 'selected' : ''}}>
            {{ $group->name }}
        </option>
    @endforeach
</select>
