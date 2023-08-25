<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Penelitian;
use App\Models\Pengabdian;

class AdminController extends Controller
{
    public function dashboard()
    {
        $penelitianMasuk = Penelitian::where('status', 1)->count();
        $pengabdianMasuk = Pengabdian::where('status', 1)->count();
        return view('admin.index', compact('penelitianMasuk', 'pengabdianMasuk'));
    }
    
    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }

    
    public function create()
    {
        return view('admin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = new Admin;
	    $admin->username = request('username');
		$admin->nama = request('nama');
        $admin->email = request('email');
        $admin->jenis_kelamin = request('jenis_kelamin');
        $admin->password = bcrypt(request('password'));
		$admin->save();
	    
		return redirect('admin/admin')->with('success','Data Berhasil Ditambahkan');
    }

    
    public function show(Admin $admin)
    {
        $data['admin'] = $admin;
        return view('admin.admin.show', $data);
    }

    
    public function edit($admin)
    {
        $data['admin'] = Admin::find($admin);
        return view('admin.admin.edit', $data);  
    }

    
    public function update(Admin $admin)
    {
        $admin->username = request('username');
		$admin->nama = request('nama');
        $admin->email = request('email');
        $admin->jenis_kelamin = request('jenis_kelamin');
        if(request('password')) $admin->password = request('password');
		$admin->save();
	    
		return redirect('admin/admin')->with('success','Data Berhasil Ditambahkan');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back();
    }
}
