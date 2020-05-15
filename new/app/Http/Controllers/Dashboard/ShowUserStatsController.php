<?php
namespace App\Http\Controller\Dashboard;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPagesController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

}
