<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $term)
        <option value={{$term->id}} {{old($name,$value) == $term->id ? 'selected' : ''}}>
            {{ $term->name }}
        </option>
    @endforeach
</select>
