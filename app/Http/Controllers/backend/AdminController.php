<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengadaan_alat_kantor_dan_rumahtangga;
use App\Pengadaan_alat_angkut_darat_bermotor;
use App\Pengadaan_alat_angkut_darat_takbermotor;
use App\Pengadaan_alat_kalibrasi;
use App\Pengadaan_meja_dan_kursi_kerja_pejabat;
use App\Belanja_modal_pengadaan_gedung_blud;
use App\Supplier;
use Session;

class AdminController extends Controller
{
//SUPPLIER
    public function index_supplier (){
        $list = Supplier::get();
        return view('backend.admin.supplier.list', compact('list'));
    }
    public function add_supplier (){
        return view('backend.admin.supplier.add', compact('list'));
    }
    public function tambah_supplier (Request $request){
        $supplier = new Supplier;
        $supplier->status = $request->status;
        $supplier->supplier = $request->supplier;
        $supplier->save();

        Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
        return redirect()->back();
    }
    public function delete_supplier (Request $request, $id)
    {
        $delete = Supplier::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_supplier (Request $request, $id)
    {
        $edit = Supplier::find($id);
        return view ('backend.admin.supplier.edit', compact('edit'));
    }
    public function store_supplier (Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->status = $request->status;
        $supplier->supplier = $request->supplier;
        $supplier->save();

        Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Ubah"
            ]);
        return redirect()->back();
    }

//ALAT KANTOR DAN RUMAH TANGGA
	public function list_alatkantor ()
	{
		$list = Pengadaan_alat_kantor_dan_rumahtangga::get();
		// dd($list);
		return view('backend.admin.alatkantor_rumahtangga.list', compact('list'));
	}
    public function index ()
    {
    	return view('backend.admin.alatkantor_rumahtangga.add');
    }

    public function add_alatkantor (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Pengadaan_alat_kantor_dan_rumahtangga;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_alatkantor (Request $request, $id){
        $delete = Pengadaan_alat_kantor_dan_rumahtangga::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_alatkantor (Request $request, $id)
    {
        $edit = Pengadaan_alat_kantor_dan_rumahtangga::find($id);
    	return view ('backend.admin.alatkantor_rumahtangga.edit', compact('edit'));
    }
    public function detail_alatkantor (Request $request, $id)
    {
        $edit = Pengadaan_alat_kantor_dan_rumahtangga::find($id);
    	return view ('backend.admin.alatkantor_rumahtangga.detail', compact('edit'));
    }
    public function edit_alatkantor_store (Request $request, $id)
    {
        $edit = Pengadaan_alat_kantor_dan_rumahtangga::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }

    //ALAT ANGKUT DARAT BERMOTOR
	public function list_alatbermotor ()
	{
		$list = Pengadaan_alat_angkut_darat_bermotor::get();
		// dd($list);
		return view('backend.admin.alatangkut_daratbermotor.list', compact('list'));
	}
    public function index_alatbermotor ()
    {
    	return view('backend.admin.alatangkut_daratbermotor.add');
    }

    public function add_alatbermotor (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Pengadaan_alat_angkut_darat_bermotor;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_alatbermotor (Request $request, $id){
        $delete = Pengadaan_alat_angkut_darat_bermotor::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_alatbermotor (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_bermotor::find($id);
    	return view ('backend.admin.alatangkut_daratbermotor.edit', compact('edit'));
    }
    public function detail_alatbermotor (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_bermotor::find($id);
    	return view ('backend.admin.alatangkut_daratbermotor.detail', compact('edit'));
    }
    public function edit_alatbermotor_store (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_bermotor::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }

    //ALAT ANGKUT DARAT TAK BERMOTOR
	public function list_alattakbermotor ()
	{
		$list = Pengadaan_alat_angkut_darat_takbermotor::get();
		// dd($list);
		return view('backend.admin.alatangkut_darattakbermotor.list', compact('list'));
	}
    public function index_alattakbermotor ()
    {
    	return view('backend.admin.alatangkut_darattakbermotor.add');
    }

    public function add_alattakbermotor (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Pengadaan_alat_angkut_darat_takbermotor;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_alattakbermotor (Request $request, $id){
        $delete = Pengadaan_alat_angkut_darat_takbermotor::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_alattakbermotor (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_takbermotor::find($id);
    	return view ('backend.admin.alatangkut_darattakbermotor.edit', compact('edit'));
    }
    public function detail_alattakbermotor (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_takbermotor::find($id);
    	return view ('backend.admin.alatangkut_darattakbermotor.detail', compact('edit'));
    }
    public function edit_alattakbermotor_store (Request $request, $id)
    {
        $edit = Pengadaan_alat_angkut_darat_takbermotor::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }

    //ALAT KALIBRASI
	public function list_alatkalibrasi ()
	{
		$list = Pengadaan_alat_kalibrasi::get();
		// dd($list);
		return view('backend.admin.alat_kalibrasi.list', compact('list'));
	}
    public function index_alatkalibrasi ()
    {
        $list = Pengadaan_alat_kalibrasi::get();
    	return view('backend.admin.alat_kalibrasi.add', compact('list'));
    }

    public function add_alatkalibrasi (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Pengadaan_alat_kalibrasi;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_alatkalibrasi (Request $request, $id){
        $delete = Pengadaan_alat_kalibrasi::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_alatkalibrasi (Request $request, $id)
    {
        $edit = Pengadaan_alat_kalibrasi::find($id);
    	return view ('backend.admin.alat_kalibrasi.edit', compact('edit'));
    }
    public function detail_alatkalibrasi (Request $request, $id)
    {
        $edit = Pengadaan_alat_kalibrasi::find($id);
    	return view ('backend.admin.alat_kalibrasi.detail', compact('edit'));
    }
    public function edit_alatkalibrasi_store (Request $request, $id)
    {
        $edit = Pengadaan_alat_kalibrasi::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }

    //MEJA DAN KURSI KERJA/RAPAT PEJABAT
	public function list_mejakursi_pejabat ()
	{
		$list = Pengadaan_meja_dan_kursi_kerja_pejabat::get();
		// dd($list);
		return view('backend.admin.mejakursi_pejabat.list', compact('list'));
	}
    public function index_mejakursi_pejabat ()
    {
    	return view('backend.admin.mejakursi_pejabat.add');
    }

    public function add_mejakursi_pejabat (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Pengadaan_meja_dan_kursi_kerja_pejabat;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_mejakursi_pejabat (Request $request, $id){
        $delete = Pengadaan_meja_dan_kursi_kerja_pejabat::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_mejakursi_pejabat (Request $request, $id)
    {
        $edit = Pengadaan_meja_dan_kursi_kerja_pejabat::find($id);
    	return view ('backend.admin.mejakursi_pejabat.edit', compact('edit'));
    }
    public function detail_mejakursi_pejabat (Request $request, $id)
    {
        $edit = Pengadaan_meja_dan_kursi_kerja_pejabat::find($id);
    	return view ('backend.admin.mejakursi_pejabat.detail', compact('edit'));
    }
    public function edit_mejakursi_pejabat_store (Request $request, $id)
    {
        $edit = Pengadaan_meja_dan_kursi_kerja_pejabat::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }

    //MODAL PENGADAAN GEDUNG & BANGUNAN BLUD
	public function list_bangunan_blud ()
	{
		$list = Belanja_modal_pengadaan_gedung_blud::get();
		// dd($list);
		return view('backend.admin.modalpengadaan_gedungbangunan_blud.list', compact('list'));
	}
    public function index_bangunan_blud ()
    {
    	return view('backend.admin.modalpengadaan_gedungbangunan_blud.add');
    }

    public function add_bangunan_blud (Request $request)
    {
    	$this->validate($request, [
            'uraian' => 'required',
        ]);

    	$add = New Belanja_modal_pengadaan_gedung_blud;
    	$add->uraian = $request->uraian;
    	$add->bulan = date("M");
    	$add->tahun = date("Y");
    	$add->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$add->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$add->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$add->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$add->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$add->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$add->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$add->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$add->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$add->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$add->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$add->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Berhasil di Simpan"
            ]);
    	return redirect()->back();
    }
    public function delete_bangunan_blud (Request $request, $id){
        $delete = Belanja_modal_pengadaan_gedung_blud::find($id);
        $delete->delete();
        Session::flash("flash_notification", [
                        "level"=>"danger",
                        "message"=>"Data Berhasil di Hapus."
            ]);
        return redirect()->back();
    }
    public function edit_bangunan_blud (Request $request, $id)
    {
        $edit = Belanja_modal_pengadaan_gedung_blud::find($id);
    	return view ('backend.admin.modalpengadaan_gedungbangunan_blud.edit', compact('edit'));
    }
    public function detail_bangunan_blud (Request $request, $id)
    {
        $edit = Belanja_modal_pengadaan_gedung_blud::find($id);
    	return view ('backend.admin.modalpengadaan_gedungbangunan_blud.detail', compact('edit'));
    }
    public function edit_bangunan_blud_store (Request $request, $id)
    {
        $edit = Belanja_modal_pengadaan_gedung_blud::find($id);
        $edit->uraian = $request->uraian;
    	$edit->anggaran_bulanan_vol = $request->anggaran_bulanan_vol;
    	$edit->anggaran_bulanan_satuan = $request->anggaran_bulanan_satuan;
    	$edit->anggaran_bulanan_harga_satuan = $request->anggaran_bulanan_harga_satuan;
    	$edit->anggaran_bulanan_jml_rp = $request->anggaran_bulanan_jml_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_rp = $request->anggaran_bulanan_bertambahberkurang_rp;
    	$edit->anggaran_bulanan_bertambahberkurang_persen = $request->anggaran_bulanan_bertambahberkurang_persen;
    	$edit->anggaran_prediksi_pengeluaran_vol = $request->anggaran_prediksi_pengeluaran_vol;
    	$edit->anggaran_prediksi_pengeluaran_satuan = $request->anggaran_prediksi_pengeluaran_satuan;
    	$edit->anggaran_prediksi_pengeluaran_harga_satuan = $request->anggaran_prediksi_pengeluaran_harga_satuan;
    	$edit->anggaran_prediksi_pengeluaran_jml_rp = $request->anggaran_prediksi_pengeluaran_jml_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_rp;
    	$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen = $request->anggaran_prediksi_pengeluaran_bertambahberkurang_persen;
    	$edit->save();
    	Session::flash("flash_notification", [
                "level" => "success",
                "message" => "Data Mengganti Data"
            ]);
    	return redirect()->back();
    }
}
