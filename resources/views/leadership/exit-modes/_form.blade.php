<div class="mb-3">
    <x-label for="name" star="true"/>
    <x-input name="name" required :value="$exitMode->name"/>
    <x-error field="name" />
</div>

<div class="mb-3">
    <x-label for="descriptions" />
    <x-textarea name="descriptions" class="form-control" >{{$exitMode->descriptions}}</x-textarea>
    <x-error field="descriptions" />
</div>

<div class="row">
    <div class="col-md-6">
        <x-nav-link href="{{route('exitModes.index')}}" label="Back" class="btn btn-danger"/>
    </div>
    <div class="col-md-6 text-end">
        <x-button class="btn btn-primary" label="{{$buttonText ?? 'Submit'}}" />
    </div>
</div>
