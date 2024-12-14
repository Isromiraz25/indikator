<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class DashboardController extends Controller
{


    public function index()
    {
        // Ambil data dari API devices
        $responseDevices = Http::withHeaders([
            'api-key' => 'M4nagement!',
        ])->get('http://34.101.194.89:5500/api/devices');
    
        if ($responseDevices->successful()) {
            $devices = $responseDevices->json();
    
            // Tambahkan data error logs untuk setiap device
            
            return view('dashboard.dashboard', compact('devices'));
        }
    
        return back()->withErrors(['message' => 'Failed to fetch data from devices API.']);
    }
    

}