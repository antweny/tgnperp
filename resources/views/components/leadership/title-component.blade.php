<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $title)
        <option value={{$title->id}} {{old($name,$value) == $title->id ? 'selected' : ''}}>
            {{ $title->full_name }}
        </option>
    @endforeach
</select>
