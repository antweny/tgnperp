<?php

use Illuminate\Support\Facades\Route;

//  Default Route */
Route::get('/', [App\Http\Controllers\IndexController::class,'index'])->name('default');
Route::get('dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');

//  Authentication routes
Auth::routes(['register' => false]);


//  Human Resource & Administration
Route::prefix('hr/')->group(function () {

    //  Departments
    Route::prefix('departments/')->name('departments.')->group(function () {
        Route::get('index', [App\Http\Controllers\HR\DepartmentController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\HR\DepartmentController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\HR\DepartmentController::class,'store'])->name('store');
        Route::get('edit/{department}', [App\Http\Controllers\HR\DepartmentController::class,'edit'])->name('edit');
        Route::put('update/{department}', [App\Http\Controllers\HR\DepartmentController::class,'update'])->name('update');
        Route::delete('destroy/{department}', [App\Http\Controllers\HR\DepartmentController::class,'destroy'])->name('destroy');
    });

    //  Designations
    Route::prefix('designations/')->name('designations.')->group(function () {
        Route::get('index', [App\Http\Controllers\HR\DesignationController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\HR\DesignationController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\HR\DesignationController::class,'store'])->name('store');
        Route::get('edit/{designation}', [App\Http\Controllers\HR\DesignationController::class,'edit'])->name('edit');
        Route::put('update/{designation}', [App\Http\Controllers\HR\DesignationController::class,'update'])->name('update');
        Route::delete('destroy/{designation}', [App\Http\Controllers\HR\DesignationController::class,'destroy'])->name('destroy');
    });

    //  Employment Routes
    Route::prefix('employments/')->group(function () {


        //  Employment Contracts
        Route::prefix('contracts/')->name('employmentContracts.')->group(function () {
            Route::get('index', [App\Http\Controllers\HR\EmploymentContractController::class,'index'])->name('index');
            Route::get('create', [App\Http\Controllers\HR\EmploymentContractController::class,'create'])->name('create');
            Route::post('store', [App\Http\Controllers\HR\EmploymentContractController::class,'store'])->name('store');
            Route::get('edit/{employmentContract}', [App\Http\Controllers\HR\EmploymentContractController::class,'edit'])->name('edit');
            Route::put('update/{employmentContract}', [App\Http\Controllers\HR\EmploymentContractController::class,'update'])->name('update');
            Route::delete('destroy/{employmentContract}', [App\Http\Controllers\HR\EmploymentContractController::class,'destroy'])->name('destroy');
        });




    });

});




//  user role & permissions
Route::prefix('users/')->group(function () {

    //  Users
    Route::name('users.')->group(function () {
        Route::get('index', [App\Http\Controllers\Auth\UserController::class, 'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Auth\UserController::class, 'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Auth\UserController::class, 'store'])->name('store');
        Route::get('edit/{user}', [App\Http\Controllers\Auth\UserController::class, 'edit'])->name('edit');
        Route::get('activate/{string}/{user}', [App\Http\Controllers\Auth\UserController::class, 'activate'])->name('activate');
        Route::put('update/{user}', [App\Http\Controllers\Auth\UserController::class, 'update'])->name('update');
        Route::delete('destroy/{user}', [App\Http\Controllers\Auth\UserController::class, 'destroy'])->name('destroy');
    });

    // user roles
    Route::prefix('roles/')->name('roles.')->group(function () {
        Route::get('index', [App\Http\Controllers\Auth\RoleController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Auth\RoleController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Auth\RoleController::class,'store'])->name('store');
        Route::get('edit/{role}', [App\Http\Controllers\Auth\RoleController::class,'edit'])->name('edit');
        Route::put('update/{role}', [App\Http\Controllers\Auth\RoleController::class,'update'])->name('update');
        Route::delete('destroy/{role}', [App\Http\Controllers\Auth\RoleController::class,'destroy'])->name('destroy');
    });

    //  user role permissions
    Route::prefix('permissions/')->name('permissions.')->group(function () {
        Route::get('index', [App\Http\Controllers\Auth\PermissionController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Auth\PermissionController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Auth\PermissionController::class,'store'])->name('store');
        Route::get('edit/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'edit'])->name('edit');
        Route::put('update/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'update'])->name('update');
        Route::delete('destroy/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'destroy'])->name('destroy');
    });
});


//  Location
Route::prefix('locations/')->name('locations.')->group(function () {
    Route::get('index', [App\Http\Controllers\LocationController::class,'index'])->name('index');
    Route::get('create', [App\Http\Controllers\LocationController::class,'create'])->name('create');
    Route::post('store', [App\Http\Controllers\LocationController::class,'store'])->name('store');
    Route::get('edit/{location}', [App\Http\Controllers\LocationController::class,'edit'])->name('edit');
    Route::put('update/{location}', [App\Http\Controllers\LocationController::class,'update'])->name('update');
    Route::delete('destroy/{location}', [App\Http\Controllers\LocationController::class,'destroy'])->name('destroy');
});


//  Organization Structures
Route::prefix('structure/')->group(function () {

    //  Types
    Route::prefix('types/')->name('types.')->group(function () {
        Route::get('index', [App\Http\Controllers\Structure\TypeController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Structure\TypeController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Structure\TypeController::class,'store'])->name('store');
        Route::get('edit/{type}', [App\Http\Controllers\Structure\TypeController::class,'edit'])->name('edit');
        Route::put('update/{type}', [App\Http\Controllers\Structure\TypeController::class,'update'])->name('update');
        Route::delete('destroy/{type}', [App\Http\Controllers\Structure\TypeController::class,'destroy'])->name('destroy');
    });

    //   Groups
    Route::prefix('groups/')->name('groups.')->group(function () {
        Route::get('index', [App\Http\Controllers\Structure\GroupController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Structure\GroupController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Structure\GroupController::class,'store'])->name('store');
        Route::get('edit/{group}', [App\Http\Controllers\Structure\GroupController::class,'edit'])->name('edit');
        Route::put('update/{group}', [App\Http\Controllers\Structure\GroupController::class,'update'])->name('update');
        Route::delete('destroy/{group}', [App\Http\Controllers\Structure\GroupController::class,'destroy'])->name('destroy');
    });

});

//  Organization and Individuals Contacts
Route::prefix('contacts')->group(function () {

    //  Organizations
    Route::prefix('organizations/')->name('organizations.')->group(function () {
        Route::get('index', [App\Http\Controllers\Contact\OrganizationController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Contact\OrganizationController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Contact\OrganizationController::class,'store'])->name('store');
        Route::get('edit/{organization}', [App\Http\Controllers\Contact\OrganizationController::class,'edit'])->name('edit');
        Route::put('update/{organization}', [App\Http\Controllers\Contact\OrganizationController::class,'update'])->name('update');
        Route::delete('destroy/{organization}', [App\Http\Controllers\Contact\OrganizationController::class,'destroy'])->name('destroy');
    });

    //  Individuals
    Route::prefix('individuals/')->name('individuals.')->group(function () {
        Route::get('index', [App\Http\Controllers\Contact\IndividualController::class,'index'])->name('index');
        Route::get('create', [App\Http\Controllers\Contact\IndividualController::class,'create'])->name('create');
        Route::post('store', [App\Http\Controllers\Contact\IndividualController::class,'store'])->name('store');
        Route::get('edit/{individual}', [App\Http\Controllers\Contact\IndividualController::class,'edit'])->name('edit');
        Route::get('activate/{string}/{individual}', [App\Http\Controllers\Contact\IndividualController::class,'activate'])->name('activate');
        Route::put('update/{individual}', [App\Http\Controllers\Contact\IndividualController::class,'update'])->name('update');
        Route::delete('destroy/{individual}', [App\Http\Controllers\Contact\IndividualController::class,'destroy'])->name('destroy');
    });

});
