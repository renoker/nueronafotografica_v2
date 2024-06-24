<?php

use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\AdminAcercaDeSliderController;
use App\Http\Controllers\AdminArquitecturaSliderController;
use App\Http\Controllers\AdminConstruccionSliderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCorporativaSliderController;
use App\Http\Controllers\AdminHomeDespegableController;
use App\Http\Controllers\AdminHomePartnersController;
use App\Http\Controllers\AdminHomeSliderController;
use App\Http\Controllers\AdminPublicitariaSliderController;
use App\Http\Controllers\AdminSliderGeneralController;
use App\Http\Controllers\AdminVideosSliderController;
use App\Http\Controllers\ArquitecturaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardTextAcercaDeController;
use App\Http\Controllers\CategoriaBlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConstruccionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorporativaController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\GaleriaBlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntagramFeedConroller;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PublicitariaController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TerminosConroller;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\VideoController;
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
Route::get('/', [HomeController::class, 'preview'])->name('home.index');
Route::get('/instagra_feed', [IntagramFeedConroller::class, 'index'])->name('instagra_feed.index');
Route::get('/terminos_y_condiciones', [TerminosConroller::class, 'index'])->name('terminos_y_condiciones.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
// Arquitectura
Route::get('/arquitectura', [ArquitecturaController::class, 'index'])->name('arquitectura.index');
// Construccion
Route::get('/construccion', [ConstruccionController::class, 'index'])->name('construccion.index');
// Corporativa
Route::get('/corporativa', [CorporativaController::class, 'index'])->name('corporativa.index');
// Corporativa
Route::get('/publicitaria', [PublicitariaController::class, 'index'])->name('publicitaria.index');
// Acerca de
Route::get('/acerca_de', [AcercaDeController::class, 'index'])->name('acerca_de.index');
// Contacto
Route::get('/contacto', [ContactController::class, 'index'])->name('contact.index');
// Contacto
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/detalle/{blog}', [BlogController::class, 'show'])->name('blog.show');
// Galeria
Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/galeria/{gallery}', [GalleryController::class, 'cotizador'])->name('gallery.cotizador');
// Videos
Route::get('/videos', [VideoController::class, 'index'])->name('video.index');
// Contactanos
Route::post('/contactanos/store',  [ContactController::class, 'store'])->name('contact.store');
Route::post('/send_cotizacion',  [GalleryController::class, 'sendCotizacion'])->name('gallery.send_cotizacion');

Route::get('size', [SizeController::class, 'index'])->name('size.index');

// ------------------------------ CSM PRODUCTIVO ---------------------------

Route::get('/backoffice', [AdminController::class, 'index'])->name('admin.index');
Route::post('/backoffice/login', [AdminController::class, 'login'])->name('admin.login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/backoffice/logout',    [AdminController::class, 'logout'])->name('admin.logout');
    Route::prefix('backoffice')->group(function () {
        // Category
        Route::prefix('categoria')->group(function () {
            Route::get('/',                                 [CategoryController::class, 'index'])->name('category.index');
            Route::get('/create',                           [CategoryController::class, 'create'])->name('category.create');
            Route::post('/store',                           [CategoryController::class, 'store'])->name('category.store');
            Route::get('/edit/{category}',                   [CategoryController::class, 'edit'])->name('category.edit');
            Route::put('/update/{category}',                 [CategoryController::class, 'update'])->name('category.update');
            Route::delete('/delete/{category}',              [CategoryController::class, 'destroy'])->name('category.destroy');
        });
        // END Category        
        // GALERIA
        Route::prefix('galeria')->group(function () {
            Route::get('/',                                 [GalleryController::class, 'backofficeIndex'])->name('backoffice_gallery.index');
            Route::get('/create',                           [GalleryController::class, 'backofficeCreate'])->name('backoffice_gallery.create');
            Route::post('/store',                           [GalleryController::class, 'backofficeStore'])->name('backoffice_gallery.store');
            Route::get('/edit/{gallery}',                   [GalleryController::class, 'backofficeEdit'])->name('backoffice_gallery.edit');
            Route::put('/update/{gallery}',                 [GalleryController::class, 'backofficeUpdate'])->name('backoffice_gallery.update');
            Route::delete('/delete/{gallery}',              [GalleryController::class, 'backofficeDestroy'])->name('backoffice_gallery.destroy');

            // Categorías
            Route::get('/category',                             [GaleriaBlogController::class, 'index'])->name('galeria_blog.index');
            Route::get('/category/create',                       [GaleriaBlogController::class, 'create'])->name('galeria_blog.create');
            Route::post('/category/store',                       [GaleriaBlogController::class, 'store'])->name('galeria_blog.store');
            Route::get('/category/edit/{galeria_blog}',          [GaleriaBlogController::class, 'edit'])->name('galeria_blog.edit');
            Route::put('/category/update/{galeria_blog}',        [GaleriaBlogController::class, 'update'])->name('galeria_blog.update');
            Route::delete('/category/delete/{galeria_blog}',     [GaleriaBlogController::class, 'destroy'])->name('galeria_blog.destroy');

            // Papel             
            Route::get('/paper',                             [PaperController::class, 'index'])->name('paper.index');
            Route::get('/paper/create',                       [PaperController::class, 'create'])->name('paper.create');
            Route::post('/paper/store',                       [PaperController::class, 'store'])->name('paper.store');
            Route::get('/paper/edit/{paper}',                 [PaperController::class, 'edit'])->name('paper.edit');
            Route::put('/paper/update/{paper}',               [PaperController::class, 'update'])->name('paper.update');
            Route::delete('/paper/delete/{paper}',            [PaperController::class, 'destroy'])->name('paper.destroy');

            // Tamaño 
            Route::get('/tamanio',                             [SizeController::class, 'index'])->name('size.index');
            Route::get('/tamanio/create',                       [SizeController::class, 'create'])->name('size.create');
            Route::post('/tamanio/store',                       [SizeController::class, 'store'])->name('size.store');
            Route::get('/tamanio/edit/{size}',                  [SizeController::class, 'edit'])->name('size.edit');
            Route::put('/tamanio/update/{size}',                [SizeController::class, 'update'])->name('size.update');
            Route::delete('/tamanio/delete/{size}',             [SizeController::class, 'destroy'])->name('size.destroy');

            // Acabado 
            Route::get('/acabado',                             [FinishController::class, 'index'])->name('finish.index');
            Route::get('/acabado/create',                       [FinishController::class, 'create'])->name('finish.create');
            Route::post('/acabado/store',                       [FinishController::class, 'store'])->name('finish.store');
            Route::get('/acabado/edit/{finish}',                  [FinishController::class, 'edit'])->name('finish.edit');
            Route::put('/acabado/update/{finish}',                [FinishController::class, 'update'])->name('finish.update');
            Route::delete('/acabado/delete/{finish}',             [FinishController::class, 'destroy'])->name('finish.destroy');

            // Translate
            Route::get('translate',                               [GalleryController::class, 'indexGaleria'])->name('translateGaleria.index');
            Route::get('translate/edit/{translation}',            [GalleryController::class, 'editGaleria'])->name('translateGaleria.edit');
            Route::put('/translate/{translation}',                [GalleryController::class, 'updateGaleria'])->name('translateGaleria.update');
        });
        // END GALERIA
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
            Route::get('admin_slider_general/edit/{admin_slider_general}',      [AdminSliderGeneralController::class, 'editHome'])->name('admin_slider_general.edit');
            Route::put('admin_slider_general/update/{admin_slider_general}',    [AdminSliderGeneralController::class, 'updateHome'])->name('admadmin_slider_general.update');
            Route::delete('admin_slider_general/delete/{admin_slider_general}', [AdminSliderGeneralController::class, 'destroyHome'])->name('admin_slider_general.destroy');
            // Partners
            Route::get('partners',                          [AdminHomePartnersController::class, 'index'])->name('partners.index');
            Route::get('partners/create',                   [AdminHomePartnersController::class, 'create'])->name('partners.create');
            Route::post('partners/store',                   [AdminHomePartnersController::class, 'store'])->name('partners.store');
            Route::get('partners/edit/{partner}',           [AdminHomePartnersController::class, 'edit'])->name('partners.edit');
            Route::put('partners/update/{partner}',         [AdminHomePartnersController::class, 'update'])->name('partners.update');
            Route::delete('partners/delete/{partner}',      [AdminHomePartnersController::class, 'destroy'])->name('partners.destroy');
        });
        // END HOME
        // ARQUITECTURA
        Route::prefix('arquitectura')->group(function () {
            // Slider
            Route::get('slider/create',                     [AdminArquitecturaSliderController::class, 'create'])->name('sliderArquitectura.create');
            Route::get('slider/edit/{slider}',              [AdminArquitecturaSliderController::class, 'edit'])->name('sliderArquitectura.edit');
            Route::apiResource('sliderArquitectura',        AdminArquitecturaSliderController::class);
            // Translate
            Route::get('translate',                         [TranslationController::class, 'indexArquitectura'])->name('translateArquitectura.index');
            Route::get('translate/edit/{translation}',      [TranslationController::class, 'editArquitectura'])->name('translateArquitectura.edit');
            Route::put('/translate/{translation}',          [TranslationController::class, 'updateArquitectura'])->name('translateArquitectura.update');
            // Sliders
            Route::get('arquitectura_slider_general',               [AdminSliderGeneralController::class, 'indexArq'])->name('arquitectura_slider_general.index');
            Route::get('arquitectura_slider_general/create',        [AdminSliderGeneralController::class, 'createArq'])->name('arquitectura_slider_general.create');
            Route::post('arquitectura_slider_general/store',        [AdminSliderGeneralController::class, 'storeArq'])->name('arquitectura_slider_general.store');
            Route::get('arquitectura_slider_general/edit/{admin_slider_general}',      [AdminSliderGeneralController::class, 'editArq'])->name('arquitectura_slider_general.edit');
            Route::put('arquitectura_slider_general/update/{admin_slider_general}',    [AdminSliderGeneralController::class, 'updateArq'])->name('arquitectura_slider_general.update');
            Route::delete('arquitectura_slider_general/delete/{admin_slider_general}', [AdminSliderGeneralController::class, 'destroyArq'])->name('arquitectura_slider_general.destroy');
        });
        // END ARQUITECTURA       
        // CONSTRUCCIÓN
        Route::prefix('construccion')->group(function () {
            // Slider
            Route::get('slider/create',                                                 [AdminConstruccionSliderController::class, 'create'])->name('sliderConstruccion.create');
            Route::get('slider/edit/{slider}',                                          [AdminConstruccionSliderController::class, 'edit'])->name('sliderConstruccion.edit');
            Route::apiResource('sliderConstruccion',                                    AdminConstruccionSliderController::class);
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexConstruccion'])->name('translateConstruccion.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editConstruccion'])->name('translateConstruccion.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updateConstruccion'])->name('translateConstruccion.update');
            // Sliders
            Route::get('construccion_slider_general',                                   [AdminSliderGeneralController::class, 'indexConstruccion'])->name('construccion_slider_general.index');
            Route::get('construccion_slider_general/create',                            [AdminSliderGeneralController::class, 'createConstruccion'])->name('construccion_slider_general.create');
            Route::post('construccion_slider_general/store',                            [AdminSliderGeneralController::class, 'storeConstruccion'])->name('construccion_slider_general.store');
            Route::get('construccion_slider_general/edit/{admin_slider_general}',       [AdminSliderGeneralController::class, 'editConstruccion'])->name('construccion_slider_general.edit');
            Route::put('construccion_slider_general/update/{admin_slider_general}',     [AdminSliderGeneralController::class, 'updateConstruccion'])->name('construccion_slider_general.update');
            Route::delete('construccion_slider_general/delete/{admin_slider_general}',  [AdminSliderGeneralController::class, 'destroyConstruccion'])->name('construccion_slider_general.destroy');
        });
        // END CONSTRUCCIÓN   
        // CORPORATIVA
        Route::prefix('corporativa')->group(function () {
            // Slider
            Route::get('slider/create',                                                 [AdminCorporativaSliderController::class, 'create'])->name('sliderCorporativa.create');
            Route::get('slider/edit/{slider}',                                          [AdminCorporativaSliderController::class, 'edit'])->name('sliderCorporativa.edit');
            Route::apiResource('sliderCorporativa',                                     AdminCorporativaSliderController::class);
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexCorporativa'])->name('translateCorporativa.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editCorporativa'])->name('translateCorporativa.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updateCorporativa'])->name('translateCorporativa.update');
            // Sliders
            Route::get('corporativa_slider_general',                                   [AdminSliderGeneralController::class, 'indexCorporativa'])->name('corporativa_slider_general.index');
            Route::get('corporativa_slider_general/create',                            [AdminSliderGeneralController::class, 'createCorporativa'])->name('corporativa_slider_general.create');
            Route::post('corporativa_slider_general/store',                            [AdminSliderGeneralController::class, 'storeCorporativa'])->name('corporativa_slider_general.store');
            Route::get('corporativa_slider_general/edit/{admin_slider_general}',       [AdminSliderGeneralController::class, 'editCorporativa'])->name('corporativa_slider_general.edit');
            Route::put('corporativa_slider_general/update/{admin_slider_general}',     [AdminSliderGeneralController::class, 'updateCorporativa'])->name('corporativa_slider_general.update');
            Route::delete('corporativa_slider_general/delete/{admin_slider_general}',  [AdminSliderGeneralController::class, 'destroyCorporativa'])->name('corporativa_slider_general.destroy');
        });
        // END CORPORATIVA         
        // PUBLICITARIA
        Route::prefix('publicitaria')->group(function () {
            // Slider
            Route::get('slider/create',                                                 [AdminPublicitariaSliderController::class, 'create'])->name('sliderPublicitaria.create');
            Route::get('slider/edit/{slider}',                                          [AdminPublicitariaSliderController::class, 'edit'])->name('sliderPublicitaria.edit');
            Route::apiResource('sliderPublicitaria',                                    AdminPublicitariaSliderController::class);
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexPublicitaria'])->name('translatePublicitaria.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editPublicitaria'])->name('translatePublicitaria.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updatePublicitaria'])->name('translatePublicitaria.update');
            // Sliders
            Route::get('publicitaria_slider_general',                                   [AdminSliderGeneralController::class, 'indexPublicitaria'])->name('publicitaria_slider_general.index');
            Route::get('publicitaria_slider_general/create',                            [AdminSliderGeneralController::class, 'createPublicitaria'])->name('publicitaria_slider_general.create');
            Route::post('publicitaria_slider_general/store',                            [AdminSliderGeneralController::class, 'storePublicitaria'])->name('publicitaria_slider_general.store');
            Route::get('publicitaria_slider_general/edit/{admin_slider_general}',       [AdminSliderGeneralController::class, 'editPublicitaria'])->name('publicitaria_slider_general.edit');
            Route::put('publicitaria_slider_general/update/{admin_slider_general}',     [AdminSliderGeneralController::class, 'updatePublicitaria'])->name('publicitaria_slider_general.update');
            Route::delete('publicitaria_slider_general/delete/{admin_slider_general}',  [AdminSliderGeneralController::class, 'destroyPublicitaria'])->name('publicitaria_slider_general.destroy');
        });
        // END PUBLICITARIA   
        // ACERCA DE
        Route::prefix('acerca_de')->group(function () {
            // Colaborador
            Route::get('personal/create',                                               [PersonalController::class, 'create'])->name('personal.create');
            Route::get('personal/edit/{personal}',                                      [PersonalController::class, 'edit'])->name('personal.edit');
            Route::apiResource('personal',                                              PersonalController::class);
            // Slider
            Route::get('slider/create',                                                 [AdminAcercaDeSliderController::class, 'create'])->name('sliderAcercaDe.create');
            Route::get('slider/edit/{slider}',                                          [AdminAcercaDeSliderController::class, 'edit'])->name('sliderAcercaDe.edit');
            Route::apiResource('sliderAcercaDe',                                        AdminAcercaDeSliderController::class);
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexAcercaDe'])->name('translateAcercaDe.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editAcercaDe'])->name('translateAcercaDe.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updateAcercaDe'])->name('translateAcercaDe.update');
            // Sliders
            Route::get('acerca_de_slider_general',                                      [AdminSliderGeneralController::class, 'indexAcercaDe'])->name('acerca_de_slider_general.index');
            Route::get('acerca_de_slider_general/create',                               [AdminSliderGeneralController::class, 'createAcercaDe'])->name('acerca_de_slider_general.create');
            Route::post('acerca_de_slider_general/store',                               [AdminSliderGeneralController::class, 'storeAcercaDe'])->name('acerca_de_slider_general.store');
            Route::get('acerca_de_slider_general/edit/{admin_slider_general}',          [AdminSliderGeneralController::class, 'editAcercaDe'])->name('acerca_de_slider_general.edit');
            Route::put('acerca_de_slider_general/update/{admin_slider_general}',        [AdminSliderGeneralController::class, 'updateAcercaDe'])->name('acerca_de_slider_general.update');
            Route::delete('acerca_de_slider_general/delete/{admin_slider_general}',     [AdminSliderGeneralController::class, 'destroyAcercaDe'])->name('acerca_de_slider_general.destroy');
            // Tarjeta de texto            
            Route::get('card_text/create',                                              [CardTextAcercaDeController::class, 'create'])->name('card_text.create');
            Route::get('card_text/edit/{card_text}',                                    [CardTextAcercaDeController::class, 'edit'])->name('card_text.edit');
            Route::apiResource('card_text',                                             CardTextAcercaDeController::class);
        });
        // END ACERCA DE         
        // CONTACTO
        Route::prefix('contacto')->group(function () {
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexContacto'])->name('translateContacto.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editContacto'])->name('translateContacto.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updateContacto'])->name('translateContacto.update');
            // Sliders
            Route::get('contacto_slider_general',                                   [AdminSliderGeneralController::class, 'indexContacto'])->name('contacto_slider_general.index');
            Route::get('contacto_slider_general/create',                            [AdminSliderGeneralController::class, 'createContacto'])->name('contacto_slider_general.create');
            Route::post('contacto_slider_general/store',                            [AdminSliderGeneralController::class, 'storeContacto'])->name('contacto_slider_general.store');
            Route::get('contacto_slider_general/edit/{admin_slider_general}',       [AdminSliderGeneralController::class, 'editContacto'])->name('contacto_slider_general.edit');
            Route::put('contacto_slider_general/update/{admin_slider_general}',     [AdminSliderGeneralController::class, 'updateContacto'])->name('contacto_slider_general.update');
            Route::delete('contacto_slider_general/delete/{admin_slider_general}',  [AdminSliderGeneralController::class, 'destroyContacto'])->name('contacto_slider_general.destroy');
        });
        // END CONTACTO                        
        // BLOG
        Route::prefix('blog')->group(function () {
            // Notas
            Route::get('notas',                                                         [BlogController::class, 'adminNotasIndex'])->name('adminNotas.index');
            Route::get('notas/create',                                                  [BlogController::class, 'adminNotascreate'])->name('adminNotas.create');
            Route::post('notas/store',                                                  [BlogController::class, 'adminNotasStore'])->name('adminNotas.store');
            Route::get('notas/edit/{blog}',                                             [BlogController::class, 'adminNotasEdit'])->name('adminNotas.edit');
            Route::put('notas/update/{blog}',                                           [BlogController::class, 'adminNotasUpdate'])->name('adminNotas.update');
            Route::delete('notas/delete/{blog}',                                        [BlogController::class, 'adminNotasDelete'])->name('adminNotas.delete');
            // Translate
            Route::get('translate',                                                     [TranslationController::class, 'indexBlog'])->name('translateBlog.index');
            Route::get('translate/edit/{translation}',                                  [TranslationController::class, 'editBlog'])->name('translateBlog.edit');
            Route::put('/translate/{translation}',                                      [TranslationController::class, 'updateBlog'])->name('translateBlog.update');

            Route::prefix('category')->group(function () {
                Route::get('/',                                                         [CategoriaBlogController::class, 'index'])->name('category_blog.index');
                Route::get('/create',                                                   [CategoriaBlogController::class, 'create'])->name('category_blog.create');
                Route::post('/store',                                                   [CategoriaBlogController::class, 'store'])->name('category_blog.store');
                Route::get('/edit/{category_blog}',                                     [CategoriaBlogController::class, 'edit'])->name('category_blog.edit');
                Route::put('/update/{category_blog}',                                   [CategoriaBlogController::class, 'update'])->name('category_blog.update');
                Route::delete('/delete/{category_blog}',                                [CategoriaBlogController::class, 'destroy'])->name('category_blog.destroy');
            });
        });
        // END BLOG        
        // VIDEOS
        Route::prefix('videos')->group(function () {
            // Slider
            Route::get('slider/create',                                                 [AdminVideosSliderController::class, 'create'])->name('sliderVideos.create');
            Route::get('slider/edit/{slider}',                                          [AdminVideosSliderController::class, 'edit'])->name('sliderVideos.edit');
            Route::apiResource('sliderVideos',                                          AdminVideosSliderController::class);
            // Video
            Route::get('video',                                                         [VideoController::class, 'adminVideoIndex'])->name('adminVideo.index');
            Route::get('video/create',                                                  [VideoController::class, 'adminVideocreate'])->name('adminVideo.create');
            Route::post('video/store',                                                  [VideoController::class, 'adminVideoStore'])->name('adminVideo.store');
            Route::get('video/edit/{video}',                                             [VideoController::class, 'adminVideoEdit'])->name('adminVideo.edit');
            Route::put('video/update/{video}',                                           [VideoController::class, 'adminVideoUpdate'])->name('adminVideo.update');
            Route::delete('video/delete/{video}',                                        [VideoController::class, 'adminVideoDelete'])->name('adminVideo.delete');
            Route::post('move_row_video',                                                 [VideoController::class, 'moveRowVideo']);
        });
        // END VIDEOS          
        Route::post('move_row_card_text',                                               [CardTextAcercaDeController::class, 'moveCardText']);
        Route::post('move_row_slider',                                                  [AdminSliderGeneralController::class, 'moveRowSlider']);
        Route::post('move_row_gallery',                                                 [GalleryController::class, 'moveRowGallery']);
        Route::post('move_partners',                                                    [AdminHomePartnersController::class, 'movePartners']);
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

// Route::prefix('blog')->group(function () {
//     Route::view('/', 'cms.admin.miscellaneous.blog')->name('blog');
//     Route::view('blog-single', 'cms.admin.miscellaneous.blog-single')->name('blog-single');
//     Route::view('add-post', 'cms.admin.miscellaneous.add-post')->name('add-post');
// });

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