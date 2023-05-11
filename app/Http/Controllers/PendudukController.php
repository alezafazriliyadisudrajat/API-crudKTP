<?php

namespace App\Http\Controllers;

use App\Helpers\formatAPI;
use App\Models\Penduduk;
use Exception;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();
        if($data){
            return formatAPI::createApi(200, 'Berhasil', $data); 
        }else{
            return formatAPI::createAPI(400, 'Gagal');
        }
    }

    public function store(Request $request)
    {
        try{
            $penduduk = Penduduk::create($request->all());

            $data = Penduduk::where('nik','=',$penduduk->nik)->get();
            if($data){
                return formatAPI::createAPI(200, 'berhasil', $data);
             }else{
                return formatAPI::createAPI(400, 'Failed');
            }
        }catch(Exception $error){
            return formatAPI::createAPI(400, 'Gagal',$error);
        }
    }

    public function show($id)
    {
        try{
            $data = Penduduk::where('id','=',$id)->first();
            if($data){
                return formatAPI::createAPI(200, 'berhasil', $data);
             }else{
                return formatAPI::createAPI(400, 'Failed');
            }
        }catch(Exception $error){
            return formatAPI::createAPI(400, 'Failed');
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $penduduk = Penduduk::findorfail($id);
            $penduduk->update($request->all());

            $data = Penduduk::where('id','=',$id)->get();
            if($data){
                return formatAPI::createAPI(200, 'berhasil', $data);
             }else{
                return formatAPI::createAPI(400, 'Failed');
            }
        }catch(Exception $error)
        {
            return formatAPI::createAPI(400, 'Failed');
        }
    }

    public function delete($id)
    {
        try{
            $penduduk = Penduduk::findorfail($id);
            $data = $penduduk->delete();
            if($data){
                return formatAPI::createAPI(200, 'berhasil', $data);
             }else{
                return formatAPI::createAPI(400, 'Failed');
            }
        }catch(Exception $error){
            return formatAPI::createAPI(400, 'Failed');
        }
    }
}
