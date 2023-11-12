<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBookController extends Controller
{

    public function index()
    {
        $perPage = 10;

        $check = DB::table('sach')
            ->join('theloai', 'theloai.MaTL', '=', 'sach.MaTL')
            ->orderBy('TenSach', 'asc')
            ->get();
        $ketqua = [];
        $list = [];
        foreach ($check as $key => $item) {
            if ($item->existsEpisode == 1) {
                $sach_tap = DB::table('sach_tap')->where('MaSach', '=', $item->MaSach)->get();
                $item->Sotap = count($sach_tap);
                foreach ($sach_tap as $k => $sach) {
                    $k = 'Tap'.($k+1);
                    $item->$k['MaTap'] = $sach->MaTap;
                    $item->$k['TenTap'] = $sach->TenTap;
                    $item->$k['SoTrangTap'] = $sach->SoTrangTap;
                    $item->$k['NoiDungTap'] = $sach->NoiDungTap;
                    $item->$k['SoLuongBS']= $sach->SoLuongBS;
                }
                if(in_array($item,$ketqua) == false){
                    $ketqua[] =$item; 
                }
            }
            else{
                if(in_array($item,$ketqua) == false){
                $ketqua[]=$item;
                }
            }
        }

        $currentPage = request()->get('page', 1);
        $totalItems = count($ketqua);
        $lastPage = ceil($totalItems / $perPage);

        $offset = ($currentPage - 1) * $perPage;
        $list = array_slice($ketqua, $offset, $perPage);
        // dd($list);
        return view('admin.layout.books.danhmucsach', compact('list','currentPage', 'lastPage'));
    }
    public function getFormNhapSach()
    {
        $list_Tl = DB::table('theloai')->get();
        return view('admin.layout.books.formnhapsach', compact('list_Tl'));
    }
    public function postFormNhapSach(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'TenSach' => 'required',
            'NoiDung'  => 'required',
            'TacGia'  => 'required',
            'SoTrang'  => 'required|min:0',
            'MaTL'  => 'required',
            'GiaSach'  => 'required|min:0',
            'SoLuong'  => 'min:0',
            'AnhSach'  => 'required'
        ], [
            'TenSach.required' => 'Bạn không thể để trống tến sách!',
            'NoiDung.required' => 'Bạn hãy ghi nội dung mô tả cho cuốn sách!',
            'TacGia.required' => 'Bạn cần điền tác giả cho cuốn sách!',
            'SoTrang.required' => 'Bạn chưa nhập số trang!',
            'SoTrang.min' => 'Số trang phải lơn hơn 0!',
            'MaTL.required' => 'Bạn chưa chọn thể loại!',
            'GiaSach.required' => 'Bạn cần nhập giá sách!',
            'GiaSach.min' => 'Giá sách phải lớn hơn 0!',
            'SoLuong.min' => 'Số lượng phải lơn hơn 0!',
            'AnhSach.required' => 'Bạn cần phải tải ảnh cho sách!',
        ]);
        // dd($request->hasFile('AnhSach'));
        // dd($request);
        if ($request->hasFile('AnhSach')) {

            $file = $request->file('AnhSach');
            $fileName = $file->hashName();
            $file->store('books', 'public');
        }
        $postdata = $request->all();
        if (isset($postdata['SoLuong']) == false) {
            $data = [
                'TenSach' => $postdata['TenSach'],
                'NoiDung'  => $postdata['NoiDung'],
                'TacGia'  => $postdata['TacGia'],
                'SoTrang'  => $postdata['SoTrang'],
                'MaTL'  => $postdata['MaTL'],
                'GiaSach'  => $postdata['GiaSach'],
                'SoLuong'  => NULL,
                'AnhSach'  => $fileName,
                'existsEpisode' => true
            ];
            DB::table('sach')->insert($data);
            return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Thêm sách thành công');
        }
        if (isset($postdata['SoLuong']) == true) {
            $data = [
                'TenSach' => $postdata['TenSach'],
                'NoiDung'  => $postdata['NoiDung'],
                'TacGia'  => $postdata['TacGia'],
                'SoTrang'  => $postdata['SoTrang'],
                'MaTL'  => $postdata['MaTL'],
                'GiaSach'  => $postdata['GiaSach'],
                'SoLuong'  => $postdata['SoLuong'],
                'AnhSach'  => $fileName,
                'existsEpisode' => false
            ];
            DB::table('sach')->insert($data);
            return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Thêm sách thành công');
        }
    }

    public function getEditSach($id)
    {
        $list_Tl = DB::table('theloai')->get();
        $edit_sach = DB::table('sach')->join('theloai', 'theloai.MaTL', '=', 'sach.MaTL')->where('MaSach', $id)->get();
        return view('admin.layout.books.editSach', compact('list_Tl', 'edit_sach'));
    }

    public function postEditSach(Request $request)
    {
        $request->validate([
            'TenSach' => 'required',
            'NoiDung'  => 'required',
            'TacGia'  => 'required',
            'SoTrang'  => 'required|min:0',
            'MaTL'  => 'required',
            'GiaSach'  => 'required|min:0',
            'SoLuong'  => 'min:0',
        ], [
            'TenSach.required' => 'Bạn không thể để trống tến sách!',
            'NoiDung.required' => 'Bạn hãy ghi nội dung mô tả cho cuốn sách!',
            'TacGia.required' => 'Bạn cần điền tác giả cho cuốn sách!',
            'SoTrang.required' => 'Bạn chưa nhập số trang!',
            'SoTrang.min' => 'Số trang phải lơn hơn 0!',
            'MaTL.required' => 'Bạn chưa chọn thể loại!',
            'GiaSach.required' => 'Bạn cần nhập giá sách!',
            'GiaSach.min' => 'Giá sách phải lớn hơn 0!',
            'SoLuong.min' => 'Số lượng phải lơn hơn 0!',
        ]);
        // dd($request);
        $postdata = $request->all();
        // dd($postdata);
        if ($request->hasFile('AnhSach')) {

            $file = $request->file('AnhSach');
            $fileName = $file->hashName();
            $file->store('books', 'public');
            if (isset($postdata['SoLuong']) == false) {
                $data = [
                    'TenSach' => $postdata['TenSach'],
                    'NoiDung'  => $postdata['NoiDung'],
                    'TacGia'  => $postdata['TacGia'],
                    'SoTrang'  => $postdata['SoTrang'],
                    'MaTL'  => $postdata['MaTL'],
                    'GiaSach'  => $postdata['GiaSach'],
                    'SoLuong'  => Null,
                    'AnhSach'  => $fileName,
                ];
                DB::table('sach')->where('MaSach', $request->id)->update($data);
                return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Cập nhật thông tin sách thành công!');
            }
            if (isset($postdata['SoLuong']) == true) {
                $data = [
                    'TenSach' => $postdata['TenSach'],
                    'NoiDung'  => $postdata['NoiDung'],
                    'TacGia'  => $postdata['TacGia'],
                    'SoTrang'  => $postdata['SoTrang'],
                    'MaTL'  => $postdata['MaTL'],
                    'GiaSach'  => $postdata['GiaSach'],
                    'SoLuong'  => $postdata['SoLuong'],
                    'AnhSach'  => $fileName,
                ];
                DB::table('sach')->where('MaSach', $request->id)->update($data);
                return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Cập nhật thông tin sách thành công!');
            }
        } else {
            if (isset($postdata['SoLuong']) == false) {
                $data = [
                    'TenSach' => $postdata['TenSach'],
                    'NoiDung'  => $postdata['NoiDung'],
                    'TacGia'  => $postdata['TacGia'],
                    'SoTrang'  => $postdata['SoTrang'],
                    'MaTL'  => $postdata['MaTL'],
                    'GiaSach'  => $postdata['GiaSach'],
                    'SoLuong'  => Null
                ];
                DB::table('sach')->where('MaSach', $request->id)->update($data);
                return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Cập nhật thông tin sách thành công!');
            }
            if (isset($postdata['SoLuong']) == true) {
                $data = [
                    'TenSach' => $postdata['TenSach'],
                    'NoiDung'  => $postdata['NoiDung'],
                    'TacGia'  => $postdata['TacGia'],
                    'SoTrang'  => $postdata['SoTrang'],
                    'MaTL'  => $postdata['MaTL'],
                    'GiaSach'  => $postdata['GiaSach'],
                    'SoLuong'  => $postdata['SoLuong'],
                ];
                DB::table('sach')->where('MaSach', $request->id)->update($data);
                return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Cập nhật thông tin sách thành công!');
            }
        }
    }

    public function postDeleteBook($id)
    {

        $sach1 = DB::table('sach')
            ->join('sach_tap', 'sach_tap.MaSach', '=', 'sach.MaSach')
            ->where('sach.MaSach', $id)
            ->get();
        if ($sach1->isEmpty()) {
            $sach2 = DB::table('sach')
                ->join('bansaosach', 'bansaosach.MaSach', '=', 'sach.MaSach')
                ->where('sach.MaSach', $id)
                ->get();
            if ($sach2->isEmpty()) {
                $sach3 = DB::table('sach')
                    ->join('chitietdondat', 'chitietdondat.MaSach', '=', 'sach.MaSach')
                    ->where('sach.MaSach', $id)
                    ->get();
                if ($sach3->isEmpty()) {
                    $sach4 = DB::table('sach')
                        ->join('chitietpnk', 'chitietpnk.MaSach', '=', 'sach.MaSach')
                        ->where('sach.MaSach', $id)
                        ->get();
                    if ($sach4->isEmpty()) {
                        DB::table('sach')->where('MaSach', $id)->delete();
                        return back()->with('msg-suc', 'Xóa thành công !');
                    }
                    return back()->with('msg-err', 'Không thể xóa sách này !');
                }
                return back()->with('msg-err', 'Không thể xóa sách này !');
            }
            return back()->with('msg-err', 'Không thể xóa sách này !');
        }
        return back()->with('msg-err', 'Không thể xóa sách này !');
    }


    public function getFormNhapSachTap($idSach)
    {
        // dd($idSach);
        $sach = DB::table('sach')
            ->join('theloai', 'theloai.MaTL', '=', 'sach.MaTL')
            ->where('sach.MaSach', '=', $idSach)
            ->get();
        // dd($sach);
        return view('admin.layout.books.formthemtap', compact('sach'));
    }

    public function postFormNhapSachTap(Request $request)
    {
        $request->validate([
            'TenTap' => 'required',
            'NoiDungTap'  => 'required',
            'SoTrangTap'  => 'required|min:0',
            'SoLuongBS'  => 'required|min:0',
            'AnhTap'  => 'required',
        ], [
            'TenTap.required' => 'Bạn không thể để trống tến tập!',
            'NoiDungTap.required' => 'Bạn hãy ghi nội dung mô tả cho tập này!',
            'TacGia.required' => 'Bạn cần điền tác giả cho cuốn sách!',
            'SoTrangTap.required' => 'Bạn chưa nhập số trang!',
            'SoTrangTap.min' => 'Số trang phải lơn hơn 0!',
            'SoLuongBS.required' => 'Bạn chưa nhập số lượng bản sao!',
            'SoLuongBS.min' => 'Số lượng phải lơn hơn 0!',
            'AnhTap.required' => 'Bạn cần chọn ảnh cho tập này!',
        ]);
        if ($request->hasFile('AnhSach')) {

            $file = $request->file('AnhSach');
            $fileName = $file->hashName();
            $file->store('books', 'public');
            $postdata = $request->all();

            $data = [
                'TenTap' => $postdata[0]->TenTap,
                'NoiDungTap' => $postdata[0]->NoiDungTap,
                'SoTrangTap' => $postdata[0]->SoTrangTap,
                'SoLuongBS' => $postdata[0]->SoLuongBS,
                'AnhTap' => $fileName
            ];
            DB::table('sach_tap')->insert($data);
        }

        return redirect()->route('admin.danhmucsach.index')->with('msg-suc', 'Thêm tập thành công!');
    }
}
