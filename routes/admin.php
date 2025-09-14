<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\ReportController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/home', [AdminDashboardController::class, 'index'])->name('adminDashboard');

    Route::prefix('profile')->controller(ProfileController::class)->group(function () {
        Route::get('detail', 'detail')->name('profile.detail');
        Route::post('update/{id}', 'update')->name('profile.update');
        Route::get('overview', 'overview')->name('profile.overview');
        Route::get('createnewuser', 'createNewUser')->name('profile.createNewUser');
        Route::post('addnewuser', 'addNewUser')->name('profile.addNewUser');
        Route::get('changeprofilepage', 'changeProfilePage')->name('changeProfilePage');
        Route::post('updateRole/{id}', 'updateField')->name('updateField');
    });

    Route::prefix('password')->controller(AuthController::class)->group(function () {
        Route::get('passwordpage', 'passwordpage')->name('passwordpage');
        Route::post('update/{id}', 'passwordchange')->name('passwordchange');

        Route::get('resetPage', 'resetPasswordPage')->name('resetPasswordPage');
        Route::post('resetPassword', 'resetPassword')->name('resetPassword');

    });

    Route::prefix('category')->controller(CategoryController::class)->group(function () {
        Route::get('list', 'list')->name('category.list');
        Route::get('create', 'create')->name('category.create');
        Route::post('store', 'store')->name('category.store');
        Route::get('edit/{id}', 'edit')->name('category.edit');
        Route::post('update/{id}', 'update')->name('category.update');
        Route::delete('delete/{id}', 'delete')->name('category.delete');
    });

    Route::prefix('product')->controller(ProductController::class)->group(function () {
        Route::get('list', 'prodlist')->name('product.prodlist');
        Route::get('prodcreate', 'prodcreate')->name('product.prodcreate');
        Route::post('prodstore', 'prodstore')->name('prodstore');
        Route::get('prodedit/{id}', 'prodedit')->name('product.prodedit');
        Route::post('produpdate', 'produpdate')->name('produpdate');
        Route::get('proddelete/{id}', 'proddelete')->name('product.proddelete');
        Route::get('prodsize/{id}', 'prodsize')->name('prodsize');
        Route::post('prodsizestore/{id}', 'prodsizestore')->name('prodsizestore');

    });

    Route::prefix('discount')->controller(ProductController::class)->group(function () {
        Route::get('discountPage', 'discountPage')->name('discountPage');
        Route::post('adddiscount', 'adddiscount')->name('adddiscount');
    });

    Route::prefix('tax')->controller(AdminDashboardController::class)->group(function () {
        Route::get('taxPage', 'taxPage')->name('taxPage');
        Route::post('addTaxRate', 'addTaxRate')->name('addTaxRate');
    });

    Route::prefix('delivery')->controller(AdminDashboardController::class)->group(function () {
        Route::get('deliveryInfoPage', 'deliveryInfoPage')->name('deliveryInfoPage');
        Route::post('addDeliFees', 'addDeliFees')->name('addDeliFees');
    });

    Route::prefix('report')->controller(ReportController::class)->group(function () {
        Route::get('reportOverview', 'reportOverview')->name('reportOverview');
        Route::get('salesReportPage', 'salesReportPage')->name('salesReportPage');
        Route::get('salesReport', 'salesReport')->name('salesReport');

        Route::get('inventoryPage', 'inventoryPage')->name('inventoryPage');
        Route::get('productAnalysis', 'productAnalysis')->name('productAnalysis');

        Route::get('supplierPurchasePage', 'supplierPurchasePage')->name('supplierPurchasePage');
        Route::get('supplierPurchase', 'supplierPurchase')->name('supplierPurchase');

        Route::get('purchasedetailsPage', 'purchasedetailsPage')->name('purchasedetailsPage');
        Route::get('purchaseDetails', 'purchaseDetails')->name('purchaseDetails');

        Route::get('feedbackPage', 'feedbackPage')->name('feedbackPage');
        Route::get('feedbackReport', 'feedbackReport')->name('feedbackReport');

    });

    Route::prefix('purchase')->controller(PurchaseController::class)->group(function () {
        Route::get('list', 'index')->name('supplier.index');
        Route::get('create', 'createSupplierPage')->name('createSupplierPage');
        Route::post('createSupplier', 'createSupplier')->name('createSupplier');
        Route::get('edit/{id}', 'editSupplier')->name('editSupplier');
        Route::post('update/{id}', 'updateSupplier')->name('updateSupplier');
        Route::delete('delete/{id}', 'deleteSupplier')->name('deleteSupplier');

        Route::get('purchasePage', 'purchasePage')->name('purchasePage');
        Route::post('addItem', 'addItem')->name('addItem');
        Route::post('storePurchase', 'storePurchase')->name('storePurchase');
        Route::post('removeItem/{id}', 'removeItem')->name('removeItem');

    });

});
