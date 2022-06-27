<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Models\FaseProgress;
use App\Models\Proyek;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->hasRole('super admin'))
        {
            $data = [
                'total_user' => User::role('admin')->count(),
                'total_aduan' => Aduan::count(),
                'users' => User::role('admin')->get()
            ];
            return view('pages.dashboard.superadmin',[
                'title' => 'Dashboard',
                'data' => $data
            ]);
        }elseif(auth()->user()->hasRole('admin')){
            $aduans = Aduan::latest()->limit(10)->get();
            $proyeks = Proyek::latest()->get();
            $data = [
                'total_aduan' => Aduan::count(),
                'total_progress' => FaseProgress::whereYear('created_at',Carbon::now()->format('Y'))->count(),
                'total_user' => User::role('user')->count(),
                'users' => User::role('user')->get(),
                'avg_aduan' => Aduan::count()/User::role('user')->count()
            ];
            return view('pages.dashboard.admin',[
                'title' => 'Dashboard',
                'aduans' => $aduans,
                'proyeks' => $proyeks,
                'data' => $data
            ]);
        }else{
            $aduans = Aduan::where('user_id',auth()->id())->latest()->limit(10)->get();
            $proyeks = Proyek::where('kota_id',auth()->user()->kota_id)->latest()->get();
            $data = [
                'total_aduan' => Aduan::where('user_id',auth()->id())->count(),
                'total_progress' => FaseProgress::whereYear('created_at',Carbon::now()->format('Y'))->count()
            ];
            return view('pages.dashboard.user',[
                'title' => 'Dashboard',
                'aduans' => $aduans,
                'data' => $data,
                'proyeks' => $proyeks
            ]);
        }
    }
}
