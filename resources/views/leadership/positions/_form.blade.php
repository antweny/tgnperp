<div class="row mb-3 ">
    <div class="col-md-4">
        <x-label for="individual" star="true"/>
        <x-individual required :value="$position->individual_id" />
        <x-error field="individual_id" />
    </div>
    <div class="col-md-4">
        <x-label for="title" star="true"  />
        <x-title required :value="$position->title_id" />
        <x-error field="title_id" />
    </div>
    <div class="col-md-4">
        <x-label for="position_mode" star="true"/>
        <x-position-mode required :value="$position->position_mode_id" />
        <x-error field="position_mode_id" />
    </div>
</div>

<div class="row mb-3 ">
    <div class="col-md-4">
        <x-label for="organization" star="true"/>
        <x-organization required :value="$position->organization_id" />
        <x-error field="organization_id" />
    </div>
    <div class="col-md-4">
        <x-label for="government_phase" star="true" />
        <x-phase required :value="$position->phase_id" />
        <x-error field="phase_id" />
    </div>
    <div class="col-md-4">
        <x-label for="phase_term" star="true"/>
        <x-term required :value="$position->term_id" />
        <x-error field="term_id" />
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <x-label for="start_date" star="true" />
{{--        <x-pick-date name="start_date" required :value="$position->start_date"/>--}}
        <x-input name="start_date" required :value="$position->start_date"/>
        <x-error field="start_date" />
    </div>
    <div class="col-md-4">
        <x-label for="end_date" />
{{--        <x-pick-date name="end_date" :value="$position->end_date"/>--}}
        <x-input name="end_date" :value="$position->end_date"/>
        <x-error field="end_date" />
    </div>
    <div class="col-md-4">
        <x-label for="exit_mode"  />
        <x-exit-mode :value="$position->exit_mode_id" />
        <x-error field="exit_mode" />
    </div>
</div>



<div class="mb-3">
    <x-label for="descriptions" />
    <x-textarea name="descriptions" class="form-control" >{{$position->descriptions}}</x-textarea>
    <x-error field="descriptions" />
</div>

<div class="row">
    <div class="col-md-6">
        <x-nav-link href="{{route('positions.index')}}" label="Back" class="btn btn-danger"/>
    </div>
    <div class="col-md-6 text-end">
        <x-button class="btn btn-primary" label="{{$buttonText ?? 'Submit'}}" />
    </div>
</div>
