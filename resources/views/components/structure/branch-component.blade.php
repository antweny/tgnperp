<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($lists as $branch)
        <option value={{$branch->id}} {{old($name,$value) == $branch->id ? 'selected' : ''}}>
            {{ $branch->name }}
        </option>
    @endforeach
</select>
