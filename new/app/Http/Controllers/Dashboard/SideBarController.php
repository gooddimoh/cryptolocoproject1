<?php
namespace App\Http\Controller\Dashboard;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SideBarController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function Large_compact_sidebar(Request $request){
        Session(['layout' => 'compact']);
        return view('dashboard.dashboardv1');
    }

    public function Store(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        User::all()->toArray();
        var_dump($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function Large_sidebar(Request $request)
    {
        Session(['layout' => 'normal']);
        User::all()->toArray();

        return view('dashboard.dashboardv1');
    }

    public function Horizontal_bar(Request $request)
    {
        Session(['layout' => 'horizontal']);
        User::all()->toArray();


        return view('dashboard.dashboardv1');
    }

    public function Vertical(Request $request)
    {
        Session(['layout' => 'vertical']);
        User::all()->toArray();


        return view('dashboard.dashboardv1');
    }

}
