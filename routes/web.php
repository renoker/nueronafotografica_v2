<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeDespegableController;
use App\Http\Controllers\AdminHomeSliderController;
use App\Http\Controllers\AdminSliderGeneralController;
use App\Http\Controllers\ArquitecturaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\TranslationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Arquitectura
Route::get('/arquitectura', [ArquitecturaController::class, 'index'])->name('arquitectura.index');


Route::get('/construccion', function () {
    return view('pages.construccion');
});

Route::get('/corporativa', function () {
    return view('pages.corporativa');
});

Route::get('/publicitaria', function () {
    return view('pages.publicitaria');
});


Route::get('/acerca_de', function () {
    return view('pages.acerca_de');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});


Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/detalle', function () {
    return view('pages.detalle');
});

Route::get('/galeria', function () {
    return view('pages.galeria');
});


// Contactanos
Route::post('/contactanos/store',  [ContactController::class, 'store'])->name('contact.store');


// ------------------------------ CSM PRODUCTIVO ---------------------------

Route::get('/backoffice', [AdminController::class, 'index'])->name('admin.index');
Route::post('/backoffice/login', [AdminController::class, 'login'])->name('admin.login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/backoffice/logout',    [AdminController::class, 'logout'])->name('admin.logout');
    Route::prefix('backoffice')->group(function () {
        // HOME
        Route::prefix('home')->group(function () {
            // Slider
            Route::get('slider/create',                     [AdminHomeSliderController::class, 'create'])->name('slider.create');
            Route::get('slider/edit/{slider}',              [AdminHomeSliderController::class, 'edit'])->name('slider.edit');
            Route::apiResource('slider',                    AdminHomeSliderController::class);
            // Despregable
            Route::get('despregable/create',                [AdminHomeDespegableController::class, 'create'])->name('despregable.create');
            Route::get('despregable/edit/{despregable}',    [AdminHomeDespegableController::class, 'edit'])->name('despregable.edit');
            Route::apiResource('despregable',               AdminHomeDespegableController::class);
            // Translate
            Route::get('translate',                         [TranslationController::class, 'indexHome'])->name('translateHome.index');
            Route::get('translate/edit/{translation}',      [TranslationController::class, 'editHome'])->name('translateHome.edit');
            Route::put('/translate/{translation}',          [TranslationController::class, 'updateHome'])->name('translateHome.update');
            // Sliders
            Route::get('home_slider_general',               [AdminSliderGeneralController::class, 'indexHome'])->name('admin_slider_general.indexHome');
            Route::get('home_slider_general/create',        [AdminSliderGeneralController::class, 'createHome'])->name('admin_slider_general.createHome');
            Route::post('home_slider_general/store',        [AdminSliderGeneralController::class, 'storeHome'])->name('admin_slider_general.storeHome');
        });
        // END HOME
        Route::post('move_row_slider',                      [AdminSliderGeneralController::class, 'moveRowSlider']);
    });
});

// ------------------------------ CSM PLANTILLA ---------------------------

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'cms.admin.dashboard.default')->name('index');
    Route::view('/default', 'cms.admin.dashboard.default')->name('dashboard.index');
});

Route::view('sample-page', 'cms.xadmin.pages.sample-page')->name('sample-page');

Route::view('default-layout', 'cms.multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'cms.multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'cms.multiple.modern-layout')->name('modern-layout');

Route::prefix('admin')->group(function () {
});

Route::prefix('dashboard')->group(function () {
    Route::view('dashboard-02', 'cms.admin.dashboard.dashboard-02')->name('dashboard-02');
});

Route::prefix('widgets')->group(function () {
    Route::view('general-widget', 'cms.admin.widgets.general-widget')->name('general-widget');
    Route::view('chart-widget', 'cms.admin.widgets.chart-widget')->name('chart-widget');
});

Route::prefix('ui-kits')->group(function () {
    Route::view('state-color', 'cms.admin.ui-kits.state-color')->name('state-color');
    Route::view('typography', 'cms.admin.ui-kits.typography')->name('typography');
    Route::view('avatars', 'cms.admin.ui-kits.avatars')->name('avatars');
    Route::view('helper-classes', 'cms.admin.ui-kits.helper-classes')->name('helper-classes');
    Route::view('grid', 'cms.admin.ui-kits.grid')->name('grid');
    Route::view('tag-pills', 'cms.admin.ui-kits.tag-pills')->name('tag-pills');
    Route::view('progress-bar', 'cms.admin.ui-kits.progress-bar')->name('progress-bar');
    Route::view('modal', 'cms.admin.ui-kits.modal')->name('modal');
    Route::view('alert', 'cms.admin.ui-kits.alert')->name('alert');
    Route::view('popover', 'cms.admin.ui-kits.popover')->name('popover');
    Route::view('tooltip', 'cms.admin.ui-kits.tooltip')->name('tooltip');
    Route::view('loader', 'cms.admin.ui-kits.loader')->name('loader');
    Route::view('dropdown', 'cms.admin.ui-kits.dropdown')->name('dropdown');
    Route::view('according', 'cms.admin.ui-kits.according')->name('according');
    Route::view('tab-bootstrap', 'cms.admin.ui-kits.tab-bootstrap')->name('tab-bootstrap');
    Route::view('tab-material', 'cms.admin.ui-kits.tab-material')->name('tab-material');
    Route::view('navs', 'cms.admin.ui-kits.navs')->name('navs');
    Route::view('box-shadow', 'cms.admin.ui-kits.box-shadow')->name('box-shadow');
    Route::view('list', 'cms.admin.ui-kits.list')->name('list');
});



Route::prefix('bonus-ui')->group(function () {
    Route::view('scrollable', 'cms.admin.bonus-ui.scrollable')->name('scrollable');
    Route::view('tree', 'cms.admin.bonus-ui.tree')->name('tree');
    Route::view('bootstrap-notify', 'cms.admin.bonus-ui.bootstrap-notify')->name('bootstrap-notify');
    Route::view('rating', 'cms.admin.bonus-ui.rating')->name('rating');
    Route::view('dropzone', 'cms.admin.bonus-ui.dropzone')->name('dropzone');
    Route::view('tour', 'cms.admin.bonus-ui.tour')->name('tour');
    Route::view('sweet-alert2', 'cms.admin.bonus-ui.sweet-alert2')->name('sweet-alert2');
    Route::view('modal-animated', 'cms.admin.bonus-ui.modal-animated')->name('modal-animated');
    Route::view('owl-carousel', 'cms.admin.bonus-ui.owl-carousel')->name('owl-carousel');
    Route::view('ribbons', 'cms.admin.bonus-ui.ribbons')->name('ribbons');
    Route::view('pagination', 'cms.admin.bonus-ui.pagination')->name('pagination');
    Route::view('steps', 'cms.admin.bonus-ui.steps')->name('steps');
    Route::view('breadcrumb', 'cms.admin.bonus-ui.breadcrumb')->name('breadcrumb');
    Route::view('range-slider', 'cms.admin.bonus-ui.range-slider')->name('range-slider');
    Route::view('image-cropper', 'cms.admin.bonus-ui.image-cropper')->name('image-cropper');
    Route::view('sticky', 'cms.admin.bonus-ui.sticky')->name('sticky');
    Route::view('basic-card', 'cms.admin.bonus-ui.basic-card')->name('basic-card');
    Route::view('creative-card', 'cms.admin.bonus-ui.creative-card')->name('creative-card');
    Route::view('tabbed-card', 'cms.admin.bonus-ui.tabbed-card')->name('tabbed-card');
    Route::view('dragable-card', 'cms.admin.bonus-ui.dragable-card')->name('dragable-card');
    Route::view('timeline-v-1', 'cms.admin.bonus-ui.timeline-v-1')->name('timeline-v-1');
    Route::view('timeline-v-2', 'cms.admin.bonus-ui.timeline-v-2')->name('timeline-v-2');
});

Route::prefix('builders')->group(function () {
    Route::view('form-builder-1', 'cms.admin.builders.form-builder-1')->name('form-builder-1');
    Route::view('form-builder-2', 'cms.admin.builders.form-builder-2')->name('form-builder-2');
    Route::view('pagebuild', 'cms.admin.builders.pagebuild')->name('pagebuild');
    Route::view('button-builder', 'cms.admin.builders.button-builder')->name('button-builder');
});

Route::prefix('animation')->group(function () {
    Route::view('animate', 'cms.admin.animation.animate')->name('animate');
    Route::view('scroll-reval', 'cms.admin.animation.scroll-reval')->name('scroll-reval');
    Route::view('aos', 'cms.admin.animation.aos')->name('aos');
    Route::view('tilt', 'cms.admin.animation.tilt')->name('tilt');
    Route::view('wow', 'cms.admin.animation.wow')->name('wow');
});

Route::prefix('icons')->group(function () {
    Route::view('flag-icon', 'cms.admin.icons.flag-icon')->name('flag-icon');
    Route::view('font-awesome', 'cms.admin.icons.font-awesome')->name('font-awesome');
    Route::view('ico-icon', 'cms.admin.icons.ico-icon')->name('ico-icon');
    Route::view('themify-icon', 'cms.admin.icons.themify-icon')->name('themify-icon');
    Route::view('feather-icon', 'cms.admin.icons.feather-icon')->name('feather-icon');
    Route::view('whether-icon', 'cms.admin.icons.whether-icon')->name('whether-icon');
});

Route::prefix('buttons')->group(function () {
    Route::view('buttons', 'cms.admin.buttons.buttons')->name('buttons');
    Route::view('buttons-flat', 'cms.admin.buttons.buttons-flat')->name('buttons-flat');
    Route::view('buttons-edge', 'cms.admin.buttons.buttons-edge')->name('buttons-edge');
    Route::view('raised-button', 'cms.admin.buttons.raised-button')->name('raised-button');
    Route::view('button-group', 'cms.admin.buttons.button-group')->name('button-group');
});

Route::prefix('charts')->group(function () {
    Route::view('chart-apex', 'cms.admin.charts.chart-apex')->name('chart-apex');
    Route::view('chart-google', 'cms.admin.charts.chart-google')->name('chart-google');
    Route::view('chart-sparkline', 'cms.admin.charts.chart-sparkline')->name('chart-sparkline');
    Route::view('chart-flot', 'cms.admin.charts.chart-flot')->name('chart-flot');
    Route::view('chart-knob', 'cms.admin.charts.chart-knob')->name('chart-knob');
    Route::view('chart-morris', 'cms.admin.charts.chart-morris')->name('chart-morris');
    Route::view('chartjs', 'cms.admin.charts.chartjs')->name('chartjs');
    Route::view('chartist', 'cms.admin.charts.chartist')->name('chartist');
    Route::view('chart-peity', 'cms.admin.charts.chart-peity')->name('chart-peity');
});

Route::prefix('form-controls')->group(function () {
    Route::view('form-validation', 'cms.admin.forms.form-validation')->name('form-validation');
    Route::view('base-input', 'cms.admin.forms.base-input')->name('base-input');
    Route::view('radio-checkbox-control', 'cms.admin.forms.radio-checkbox-control')->name('radio-checkbox-control');
    Route::view('input-group', 'cms.admin.forms.input-group')->name('input-group');
    Route::view('megaoptions', 'cms.admin.forms.megaoptions')->name('megaoptions');
});

Route::prefix('form-widgets')->group(function () {
    Route::view('datepicker', 'cms.admin.forms.datepicker')->name('datepicker');
    Route::view('time-picker', 'cms.admin.forms.time-picker')->name('time-picker');
    Route::view('datetimepicker', 'cms.admin.forms.datetimepicker')->name('datetimepicker');
    Route::view('daterangepicker', 'cms.admin.forms.daterangepicker')->name('daterangepicker');
    Route::view('touchspin', 'cms.admin.forms.touchspin')->name('touchspin');
    Route::view('select2', 'cms.admin.forms.select2')->name('select2');
    Route::view('switch', 'cms.admin.forms.switch')->name('switch');
    Route::view('typeahead', 'cms.admin.forms.typeahead')->name('typeahead');
    Route::view('clipboard', 'cms.admin.forms.clipboard')->name('clipboard');
});

Route::prefix('form-layout')->group(function () {
    Route::view('default-form', 'cms.admin.forms.default-form')->name('default-form');
    Route::view('form-wizard', 'cms.admin.forms.form-wizard')->name('form-wizard');
    Route::view('form-wizard-two', 'cms.admin.forms.form-wizard-two')->name('form-wizard-two');
    Route::view('form-wizard-three', 'cms.admin.forms.form-wizard-three')->name('form-wizard-three');
});

Route::prefix('bootstrap-tables')->group(function () {
    Route::view('bootstrap-basic-table', 'cms.admin.tables.bootstrap-tables.bootstrap-basic-table')->name('bootstrap-basic-table');
    Route::view('bootstrap-sizing-table', 'cms.admin.tables.bootstrap-tables.bootstrap-sizing-table')->name('bootstrap-sizing-table');
    Route::view('bootstrap-border-table', 'cms.admin.tables.bootstrap-tables.bootstrap-border-table')->name('bootstrap-border-table');
    Route::view('bootstrap-styling-table', 'cms.admin.tables.bootstrap-tables.bootstrap-styling-table')->name('bootstrap-styling-table');
    Route::view('table-components', 'cms.admin.tables.bootstrap-tables.table-components')->name('table-components');
});

Route::prefix('data-tables')->group(function () {
    Route::view('datatable-basic-init', 'cms.admin.tables.data-tables.datatable-basic-init')->name('datatable-basic-init');
    Route::view('datatable-advance', 'cms.admin.tables.data-tables.datatable-advance')->name('datatable-advance');
    Route::view('datatable-styling', 'cms.admin.tables.data-tables.datatable-styling')->name('datatable-styling');
    Route::view('datatable-AJAX', 'cms.admin.tables.data-tables.datatable-AJAX')->name('datatable-AJAX');
    Route::view('datatable-server-side', 'cms.admin.tables.data-tables.datatable-server-side')->name('datatable-server-side');
    Route::view('datatable-plugin', 'cms.admin.tables.data-tables.datatable-plugin')->name('datatable-plugin');
    Route::view('datatable-API', 'cms.admin.tables.data-tables.datatable-API')->name('datatable-API');
    Route::view('datatable-data-source', 'cms.admin.tables.data-tables.datatable-data-source')->name('datatable-data-source');
});

Route::prefix('ex-data-tables')->group(function () {
    Route::view('datatable-ext-autofill', 'cms.admin.tables.ex-data-tables.datatable-ext-autofill')->name('datatable-ext-autofill');
    Route::view('datatable-ext-basic-button', 'cms.admin.tables.ex-data-tables.datatable-ext-basic-button')->name('datatable-ext-basic-button');
    Route::view('datatable-ext-col-reorder', 'cms.admin.tables.ex-data-tables.datatable-ext-col-reorder')->name('datatable-ext-col-reorder');
    Route::view('datatable-ext-fixed-header', 'cms.admin.tables.ex-data-tables.datatable-ext-fixed-header')->name('datatable-ext-fixed-header');
    Route::view('datatable-ext-key-table', 'cms.admin.tables.ex-data-tables.datatable-ext-key-table')->name('datatable-ext-key-table');
    Route::view('datatable-ext-responsive', 'cms.admin.tables.ex-data-tables.datatable-ext-responsive')->name('datatable-ext-responsive');
    Route::view('datatable-ext-row-reorder', 'cms.admin.tables.ex-data-tables.datatable-ext-row-reorder')->name('datatable-ext-row-reorder');
    Route::view('datatable-ext-scroller', 'cms.admin.tables.ex-data-tables.datatable-ext-scroller')->name('datatable-ext-scroller');
});

Route::view('jsgrid-table', 'cms.admin.tables.jsgrid-table')->name('jsgrid-table');

Route::prefix('project')->group(function () {
    Route::view('projects', 'cms.admin.apps.project.projects')->name('projects');
    Route::view('projectcreate', 'cms.admin.apps.project.projectcreate')->name('projectcreate');
});
Route::view('file-manager', 'cms.admin.apps.file-manager')->name('file-manager');
Route::view('kanban', 'cms.admin.apps.kanban')->name('kanban');

Route::prefix('ecommerce')->group(function () {
    Route::view('product', 'cms.admin.apps.ecommerce.product')->name('product');
    Route::view('product-page', 'cms.admin.apps.ecommerce.product-page')->name('product-page');
    Route::view('list-products', 'cms.admin.apps.ecommerce.list-products')->name('list-products');
    Route::view('payment-details', 'cms.admin.apps.ecommerce.payment-details')->name('payment-details');
    Route::view('order-history', 'cms.admin.apps.ecommerce.order-history')->name('order-history');
    Route::view('invoice-template', 'cms.admin.apps.ecommerce.invoice-template')->name('invoice-template');
    Route::view('cart', 'cms.admin.apps.ecommerce.cart')->name('cart');
    Route::view('list-wish', 'cms.admin.apps.ecommerce.list-wish')->name('list-wish');
    Route::view('checkout', 'cms.admin.apps.ecommerce.checkout')->name('checkout');
    Route::view('pricing', 'cms.admin.apps.ecommerce.pricing')->name('pricing');
});

Route::prefix('email')->group(function () {
    Route::view('email_inbox', 'cms.admin.apps.email_inbox')->name('email_inbox');
    Route::view('email_read', 'cms.admin.apps.email_read')->name('email_read');
    Route::view('email_compose', 'cms.admin.apps.email_compose')->name('email_compose');
});

Route::prefix('chat')->group(function () {
    Route::view('chat', 'cms.admin.apps.chat')->name('chat');
    Route::view('chat-video', 'cms.admin.apps.chat-video')->name('chat-video');
});

Route::prefix('users')->group(function () {
    Route::view('user-profile', 'cms.admin.apps.user-profile')->name('user-profile');
    Route::view('edit-profile', 'cms.admin.apps.edit-profile')->name('edit-profile');
    Route::view('user-cards', 'cms.admin.apps.user-cards')->name('user-cards');
});

Route::view('bookmark', 'cms.admin.apps.bookmark')->name('bookmark');
Route::view('contacts', 'cms.admin.apps.contacts')->name('contacts');
Route::view('task', 'cms.admin.apps.task')->name('task');
Route::view('calendar-basic', 'cms.admin.apps.calendar-basic')->name('calendar-basic');
Route::view('social-app', 'cms.admin.apps.social-app')->name('social-app');
Route::view('to-do', 'cms.admin.apps.to-do')->name('to-do');
Route::view('search', 'cms.admin.apps.search')->name('search');

Route::view('internationalization', 'cms.admin.pages.internationalization')->name('internationalization');

Route::view('error-page1', 'cms.admin.errors.error-page1')->name('error-page1');
Route::view('error-page2', 'cms.admin.errors.error-page2')->name('error-page2');
Route::view('error-page3', 'cms.admin.errors.error-page3')->name('error-page3');
Route::view('error-page4', 'cms.admin.errors.error-page4')->name('error-page4');

Route::view('login_one', 'cms.admin.authentication.login_one')->name('login_one');
Route::view('login_two', 'cms.admin.authentication.login_two')->name('login_two');
Route::view('login-bs-validation', 'cms.admin.authentication.login-bs-validation')->name('login-bs-validation');
Route::view('login-bs-tt-validation', 'cms.admin.authentication.login-bs-tt-validation')->name('login-bs-tt-validation');
Route::view('login-sa-validation', 'cms.admin.authentication.login-sa-validation')->name('login-sa-validation');
Route::view('sign-up', 'cms.admin.authentication.sign-up')->name('sign-up');
Route::view('sign-up-one', 'cms.admin.authentication.sign-up-one')->name('sign-up-one');
Route::view('sign-up-two', 'cms.admin.authentication.sign-up-two')->name('sign-up-two');
Route::view('unlock', 'cms.admin.authentication.unlock')->name('unlock');
Route::view('forget-password', 'cms.admin.authentication.forget-password')->name('forget-password');
Route::view('creat-password', 'cms.admin.authentication.creat-password')->name('creat-password');
Route::view('maintenance', 'cms.admin.authentication.maintenance')->name('maintenance');

Route::view('comingsoon', 'cms.admin.comingsoon.comingsoon')->name('comingsoon');
Route::view('comingsoon-bg-video', 'cms.admin.comingsoon.comingsoon-bg-video')->name('comingsoon-bg-video');
Route::view('comingsoon-bg-img', 'cms.admin.comingsoon.comingsoon-bg-img')->name('comingsoon-bg-img');

Route::view('basic-template', 'cms.admin.email.basic-template')->name('basic-template');
Route::view('email-header', 'cms.admin.email.email-header')->name('email-header');
Route::view('template-email', 'cms.admin.email.template-email')->name('template-email');
Route::view('template-email-2', 'cms.admin.email.template-email-2')->name('template-email-2');
Route::view('ecommerce-templates', 'cms.admin.email.ecommerce-templates')->name('ecommerce-templates');
Route::view('email-order-success', 'cms.admin.email.email-order-success')->name('email-order-success');

Route::prefix('gallery')->group(function () {
    Route::view('/', 'cms.admin.gallery.gallery')->name('gallery');
    Route::view('gallery-masonry', 'cms.admin.gallery.gallery-masonry')->name('gallery-masonry');
    Route::view('gallery-with-description', 'cms.admin.gallery.gallery-with-description')->name('gallery-with-description');
    Route::view('masonry-gallery-with-disc', 'cms.admin.gallery.masonry-gallery-with-disc')->name('masonry-gallery-with-disc');
    Route::view('gallery-hover', 'cms.admin.gallery.gallery-hover')->name('gallery-hover');
});

Route::prefix('blog')->group(function () {
    Route::view('/', 'cms.admin.miscellaneous.blog')->name('blog');
    Route::view('blog-single', 'cms.admin.miscellaneous.blog-single')->name('blog-single');
    Route::view('add-post', 'cms.admin.miscellaneous.add-post')->name('add-post');
});

Route::view('faq', 'cms.admin.miscellaneous.faq')->name('faq');

Route::prefix('job-search')->group(function () {
    Route::view('job-cards-view', 'cms.admin.miscellaneous.job-cards-view')->name('job-cards-view');
    Route::view('job-list-view', 'cms.admin.miscellaneous.job-list-view')->name('job-list-view');
    Route::view('job-details', 'cms.admin.miscellaneous.job-details')->name('job-details');
    Route::view('job-apply', 'cms.admin.miscellaneous.job-apply')->name('job-apply');
});

Route::prefix('learning')->group(function () {
    Route::view('learning-list-view', 'cms.admin.miscellaneous.learning-list-view')->name('learning-list-view');
    Route::view('learning-detailed', 'cms.admin.miscellaneous.learning-detailed')->name('learning-detailed');
});

Route::prefix('maps')->group(function () {
    Route::view('map-js', 'cms.admin.miscellaneous.map-js')->name('map-js');
    Route::view('vector-map', 'cms.admin.miscellaneous.vector-map')->name('vector-map');
});

Route::prefix('editors')->group(function () {
    Route::view('summernote', 'cms.admin.miscellaneous.summernote')->name('summernote');
    Route::view('ckeditor', 'cms.admin.miscellaneous.ckeditor')->name('ckeditor');
    Route::view('simple-MDE', 'cms.admin.miscellaneous.simple-MDE')->name('simple-MDE');
    Route::view('ace-code-editor', 'cms.admin.miscellaneous.ace-code-editor')->name('ace-code-editor');
});

Route::view('knowledgebase', 'cms.admin.miscellaneous.knowledgebase')->name('knowledgebase');

// Route::apiResource('maintenance_payment', MaintenancePaymentController::class);