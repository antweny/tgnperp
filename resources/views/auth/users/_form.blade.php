<div class="mb-3">
    <x-label for="name" star="true"/>
    <x-input name="name" required :value="$user->name" />
    <x-error field="name" />
</div>

<div class="mb-3">
    <x-label for="email" star="true"/>
    <x-email name="email" required :value="$user->email" />
    <x-error field="email" />
</div>

<div class="mb-3 row">
    <div class="col-md-12 mb-3">
        <x-label for="assign_roles" />
    </div>
    <x-role />
    <x-error field="roles" />
</div>

<div class="row">
    <div class="col-md-6">
        <x-nav-link href="{{route('users.index')}}" label="Back" class="btn btn-danger"/>
    </div>
    <div class="col-md-6 text-end">
        <x-button class="btn btn-primary" label="{{$buttonText ?? 'submit'}}" />
    </div>
</div>
