<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $organization)
        <option value={{$organization->id}} {{old($name,$value) == $organization->id ? 'selected' : ''}}>
            {{ $organization->full_name }}
        </option>
    @endforeach
</select>
