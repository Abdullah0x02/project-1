    <?php

        use App\Http\Controllers\ProfileController;
        use Illuminate\Support\Facades\Route;
        use App\Http\Controllers\AdminController;
        use App\Http\Controllers\AgentController;
        use App\Http\Controllers\PropertyTypeCon;
        use App\Http\Controllers\rolecont;
        use App\Http\Controllers\TestCon;
use Illuminate\Support\Facades\Auth;

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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';

    Route::resource('test',TestCon::class);


    //check auth(if the user logged in) first then if MW named role then it is alright
    Route::middleware(['auth','role:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminprofile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'adminprofileupdate'])->name('admin.profile.update');

    });
    Route::get('/admin/login', [AdminController::class, 'adminlogin'])->name('admin.login');//get to login if i
    //type the link above


    Route::middleware(['auth','role:agent'])->group(function (){
    Route::get('/agent/dashboard', [AgentController::class, 'agentdashboard'])->name('agent.dashboard');
    });

    Route::middleware(['auth','role:admin'])->group(function (){

        Route::controller(PropertyTypeCon::class)->group(function (){

        Route::get('/all/type', 'alltype')->name('all.types');
        Route::get('/add/type', 'addtype')->name('add.types');
        Route::post('/store/type', 'storetype')->name('store.types');

        Route::get('/edit/type/{id}', 'edittype')->name('edit.types');
        Route::post('/update/type/', 'updatetype')->name('update.types');

        Route::get('/del/type/{id}', 'deltype')->name('del.types');
    });

    Route::controller(PropertyTypeCon::class)->group(function (){//for amenities

        Route::get('/all/amenitie', 'allamenitie')->name('all.amenities');
        Route::get('/add/amenitie', 'addamenitie')->name('add.amenitie');
        Route::post('/store/amenitie', 'storeamenitie')->name('store.amenitie');

        Route::get('/edit/amenitie/{id}', 'editamenitie')->name('edit.amenitie');
        Route::post('/update/amenitie/', 'updateamenitie')->name('update.amenitie');

        Route::get('/del/amenitie/{id}', 'delamenitie')->name('del.amenitie');
    });
    Route::controller(rolecont::class)->group(function (){//for roles&perm

        Route::get('/all/perm', 'allperm')->name('all.perm');
        Route::get('/add/perm', 'addperm')->name('add.perm');
        Route::post('/store/perm', 'storeperm')->name('store.perm');

        Route::get('/edit/perm/{id}', 'editperm')->name('edit.perm');
        Route::post('/update/perm/', 'updateperm')->name('update.perm');

        Route::get('/del/perm/{id}', 'delperm')->name('del.perm');


        Route::get('/all/role', 'allrole')->name('all.role');
        Route::get('/add/role', 'addrole')->name('add.role');
        Route::post('/store/role', 'storerole')->name('store.role');

        Route::get('/edit/role/{id}', 'editrole')->name('edit.role');
        Route::post('/update/role/', 'updaterole')->name('update.role');

        Route::get('/del/role/{id}', 'delrole')->name('del.role');

        Route::get('/add/rinp', 'addrinp')->name('add.rinp');
        Route::post('/rp/store', 'rps')->name('role.perm.store');
        });


    });
