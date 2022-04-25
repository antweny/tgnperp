<?php

namespace App\Providers;

use App\View\Components\Auth\Permission;
use App\View\Components\Auth\Role;
use App\View\Components\Chart\Current\DeputyMinisterComponent;
use App\View\Components\Chart\Current\DeputyPermanentSecretaryComponent;
use App\View\Components\Chart\Current\DistrictAdministrativeSecretaryComponent;
use App\View\Components\Chart\Current\DistrictCommissionerComponent;
use App\View\Components\Chart\Current\MinisterComponent;
use App\View\Components\Chart\Current\PermanentSecretaryComponent;
use App\View\Components\Chart\Current\RegionalAdministrativeSecretaryComponent;
use App\View\Components\Chart\Current\RegionalCommissionerComponent;
use App\View\Components\Chart\Structure\Branch\ExecutiveComponent;
use App\View\Components\Chart\Structure\Branch\JudiciaryComponent;
use App\View\Components\Chart\Structure\Branch\LegislativeComponent;
use App\View\Components\Contact\IndividualComponent;
use App\View\Components\Contact\OrganizationComponent;
use App\View\Components\Government\PhaseComponent;
use App\View\Components\Government\TermComponent;
use App\View\Components\Leadership\ExitModeComponent;
use App\View\Components\Leadership\PositionModeComponent;
use App\View\Components\Leadership\TitleComponent;
use App\View\Components\LocationComponent;
use App\View\Components\Report\Chart\CurrentMinistryComponent;
use App\View\Components\Report\Chart\CurrentRepresentationByTitleComponent;
use App\View\Components\Structure\BranchComponent;
use App\View\Components\Structure\GroupComponent;
use App\View\Components\Structure\TypeComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('role', Role::class);
        Blade::component('permission', Permission::class);
        Blade::component('location', LocationComponent::class);
        Blade::component('branch',   BranchComponent::class);
        Blade::component('type',   TypeComponent::class);
        Blade::component('group',   GroupComponent::class);
        Blade::component('individual',   IndividualComponent::class);
        Blade::component('phase',   PhaseComponent::class);
        Blade::component('term',   TermComponent::class);
        Blade::component('organization',   OrganizationComponent::class);
        Blade::component('title',   TitleComponent::class);
        Blade::component('position-mode',   PositionModeComponent::class);
        Blade::component('exit-mode',   ExitModeComponent::class);

        // Different Charts
        Blade::component('minister',   MinisterComponent::class);
        Blade::component('deputy-minister',   DeputyMinisterComponent::class);
        Blade::component('regional-administrative-secretary',   RegionalAdministrativeSecretaryComponent::class);
        Blade::component('district-administrative-secretary',   DistrictAdministrativeSecretaryComponent::class);
        Blade::component('regional-commissioner',   RegionalCommissionerComponent::class);
        Blade::component('district-commissioner',   DistrictCommissionerComponent::class);
        Blade::component('permanent-secretary',   PermanentSecretaryComponent::class);
        Blade::component('deputy-permanent-secretary',   DeputyPermanentSecretaryComponent::class);

        // Structure Components
        //Branches
        Blade::component('executive',   ExecutiveComponent::class);
        Blade::component('judiciary',   JudiciaryComponent::class);
        Blade::component('legislative',   LegislativeComponent::class);
    }
}
