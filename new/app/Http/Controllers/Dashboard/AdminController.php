<?php
namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UserSettings;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Alexusmai\LaravelFileManager\Services\Zip;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
    }

    public function Dashboard(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();

        return view("roles.client.backend.interest", ['users' => $users]);
//        }
    }

    public function Interest(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.interest', ['users' => $users]);
//        }
    }

    public function Cryptoloans(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.cryptoloans', ['users' => $users]);
//        }
    }

    public function Filesmanager(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.filesmanager', ['users' => $users]);
//        }
    }

    public function Chat(Request $request)
    {
        $request->all();
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.chat.chat', ['users' => $users]);
        Response::json($array);
//        }
    }

    public function ProfileSettings(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.profilesettings', ['users' => $users]);
//        }
    }

    public function UsersSettings(Request $request)
    {
//        if (Auth::check() && Auth::user()->role('client')) {
        $users = User::all()->toArray();
        return view('roles.client.backend.usersettings', ['users' => $users]);
//        }
    }

}

