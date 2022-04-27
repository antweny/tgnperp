<div class="mb-3 row">
    <div class="col-md-6">
        <x-label for="name" star="true"/>
        <x-input name="name" required :value="$organization->name"/>
        <x-error field="name" />
    </div>
    <div class="col-md-3">
        <x-label for="acronym"  />
        <x-input name="acronym" :value="$organization->acronym"/>
        <x-error field="acronym" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <x-label for="type" star="true" />
        <x-type required :value="$organization->type_id"/>
        <x-error field="organization_type_id" />
    </div>
    <div class="col-md-4">
        <x-label for="group" star="true" />
        <x-group required :value="$organization->group_id" />
        <x-error field="organization_group_id" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <x-label for="Location" />
        <x-location :value="$organization->location_id"/>
        <x-error field="location" />
    </div>
    <div class="col-md-4">
        <x-label for="mobile" />
        <x-input name="mobile" :value="$organization->mobile" />
        <x-error field="mobile" />
    </div>
    <div class="col-md-4">
        <x-label for="email" />
        <x-email name="email" :value="$organization->email" />
        <x-error field="email" />
    </div>
</div>

<div class="mb-3">
    <x-label for="address" />
    <x-textarea name="address" class="form-control" >{{$organization->address}}</x-textarea>
    <x-error field="address" />
</div>

<div class="row">
    <div class="col-md-6">
        <x-nav-link href="{{route('organizations.index')}}" label="Back" class="btn btn-danger"/>
    </div>
    <div class="col-md-6 text-end">
        <x-button class="btn btn-primary" label="{{$buttonText ?? 'Submit'}}" />
    </div>
</div>
