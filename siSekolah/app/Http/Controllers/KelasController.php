<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class KelasController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Ini Kelas',
            'token_CSRF' => csrf_token()
        ]);
    }

    public function ListKelas()
    {
        $semuaKelas = Kelas::select('nama_kelas', 'tema_kelas', 'moto_kelas')->get();

        return response()->json($semuaKelas);
    }

    public function DetailKelas(string $namaKelas)
    {
        $kelas = Kelas::where('nama_kelas', $namaKelas)->get();
        $siswa = Siswa::where('kelas', $namaKelas)->get(['nama_siswa', 'kelas', 'nomor_induk_siswa']);

        if ($kelas->isEmpty()) {
            return response()->json([
                'error' => 'Kelas tidak tersedia!'
            ]);
        } else {
            if (!$siswa->isEmpty()) {
                return response()->json([
                    'detail_kelas' => $kelas,
                    'daftar_siswa' => $siswa
                ]);
            } else {
                return response()->json([
                    'detail_kelas' => $kelas,
                    'daftar_siswa' => "Kelas ini belum memiliki siswa"
                ]);
            }
        }
    }

    public function TambahKelas(Request $request)
    {
        $post = $request->all();

        $validator = Validator::make($post, [
            'nama_kelas' => 'required|max:2|unique:kelas,nama_kelas',
            'deskripsi_kelas' => 'max:256',
            'tema_kelas' => 'required|max:32',
            'moto_kelas' => 'required|max:64',
            'fasilitas_kelas' => 'nullable',
            'nama_wali_kelas' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->getMessages();
            return response()->json([
                'error' => $errors
            ]);
        } else {
            $validatedData = $validator->validated();

            $kelas = Kelas::create($validatedData);
            $kelas->save();

            return response()->json([
                'message' => 'Data kelas disimpan',
                'data_kelas' => $validatedData
            ]);
        }
    }

    public function UpdateKelas(Request $request)
    {
        $post = $request->all();

        $validator = Validator::make($post, [
            'nama_kelas' => 'required|max:2',
            'deskripsi_kelas' => 'max:256',
            'tema_kelas' => 'required|max:32',
            'moto_kelas' => 'required|max:64',
            'fasilitas_kelas' => 'nullable',
            'nama_wali_kelas' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->getMessages();
            return response()->json([
                'error' => $errors
            ]);
        } else {
            $validatedData = $validator->validated();
            $kelas = Kelas::where('nama_kelas', $validatedData['nama_kelas'])->first();

            if (!$kelas) {
                return response()->json([
                    'error' => 'Kelas tidak tersedia!'
                ]);
            } else {
                $kelas->fill($validatedData)->save();

                return response()->json([
                    'message' => 'Data telah diperbarui',
                    'data_kelas' => $validatedData
                ]);
            }
        }
    }
}
