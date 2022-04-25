<div class="mb-3 row">
    <div class="col-md-8">
        <x-label for="name" star="true"/>
        <x-input name="name" required :value="$individual->name"/>
        <x-error field="name" />
    </div>
    <div class="col-md-4">
        <x-label for="sex" star="true" />
        <select id="sex" name="sex" class="form-control single-select" required>
            <option value="">--Select--</option>
            <option value="Female" {{old('sex',$individual->sex) == 'Female' ? 'selected' : ''}}>Female</option>
            <option value="Male" {{old('sex',$individual->sex) == 'Male' ? 'selected' : ''}}>Male</option>
        </select>
        <x-error field="sex" />
    </div>
</div>

<div class="mb-3 row">
    <div class="col-md-6">
        <x-label for="mobile" />
        <x-input name="mobile" :value="$individual->mobile" />
        <x-error field="mobile" />
    </div>
    <div class="col-md-6">
        <x-label for="email" />
        <x-email name="email" :value="$individual->email" />
        <x-error field="email" />
    </div>
</div>

<div class="mb-3">
    <x-label for="address" />
    <x-textarea name="address" class="form-control" >{{$individual->address}}</x-textarea>
    <x-error field="address" />
</div>

<div class="row">
    <div class="col-md-6">
        <x-nav-link href="{{route('individuals.index')}}" label="Back" class="btn btn-danger"/>
    </div>
    <div class="col-md-6 text-end">
        <x-button class="btn btn-primary" label="{{$buttonText ?? 'Submit'}}" />
    </div>
</div>
