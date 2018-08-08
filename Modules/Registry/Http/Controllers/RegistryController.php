<?php

namespace Modules\Registry\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Modules\Registry\Http\Requests\Register;

use DB;

class RegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function register(Register $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            $buka = parent::listData('settings', ['key' => 'pendaftaran'], null, 'first');
            if ($buka['status'] != 200) {
                return back()->withErrors(['Data tidak valid']);
            }

            $tutup = parent::listData('settings', ['key' => 'tutup'], null, 'first');
            if ($tutup['status'] != 200) {
                return back()->withErrors(['Data tidak valid']);
            }

            if (date('Y-m-d') < date('Y-m-d', strtotime($tutup['result']['value'])) && date('Y-m-d') > date('Y-m-d', strtotime($buka['result']['value']))) {
                return view('registry::index');
            } else {
                return view('registry::fail');
            }
        } else {
            DB::beginTransaction();
            $post['user_pass'] = bcrypt($post['password']);
            $post['user_type'] = 'student';
            $post['user_verified'] = '1';
            $create = parent::insertData($post,'users');
            if ($create['status'] === 200) {
                DB::commit();
                return redirect('login')->with(['success' => ['Register Berhasil, Silahkan Login']]);
            }

            DB::rollback();
            return back()->withErrors(['Pendaftaran gagal, silahkan coba lagi']);
        }

    }
    
    public function form()
    {
        $buka = parent::listData('settings', ['key' => 'pendaftaran'], null, 'first');
        if ($buka['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        $tutup = parent::listData('settings', ['key' => 'tutup'], null, 'first');
        if ($tutup['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        if (date('Y-m-d') < date('Y-m-d', strtotime($tutup['value'])) && date('Y-m-d') > date('Y-m-d', strtotime($buka['value']))) {
            return view('registry::form');
        } else {
            return view('registry::fail');
        }
    }

    public function status(Request $request)
    {
        $post = $request->except('_token');

        $buka = parent::listData('settings', ['key' => 'pendaftaran'], null, 'first');
        if ($buka['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        $tutup = parent::listData('settings', ['key' => 'tutup'], null, 'first');
        if ($tutup['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        if (empty($post)) {
            return view('registry::status', ['buka' => $buka['result'], 'tutup' => $tutup['result']]);
        }

        $ubuka = parent::updateData(['value' => date('Y-m-d', strtotime($post['buka']))], 'settings', ['key' => 'pendaftaran']);
        if ($ubuka['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        $ututup = parent::updateData(['value' => date('Y-m-d', strtotime($post['tutup']))], 'settings', ['key' => 'tutup']);
        if ($ututup['status'] != 200) {
            return back()->withErrors(['Data tidak valid']);
        }

        return back()->with(['status' => ['Setting berhasil disimpan']]);
    }
}
