<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ClearDefectImport;
use Maatwebsite\Excel\Facades\Excel;

class ClearDefectController extends Controller
{
    public function index()
    {
        $title = '清檢缺失資料';
        return view('backend.clear_defects.index', [
            'title' => $title,
            'clearDefects' => \App\Models\ClearDefect::get(),
        ]);
    }

    public function import(Request $request)
    {
        if ($request->file('excel') == null) {
            alert()->error('錯誤', '請選擇檔案');
            return back();
        }

        if ($request->file('excel')->getClientOriginalExtension() != 'xlsx') {
            alert()->error('錯誤', '檔案格式錯誤');
            return back();
        }

        try {
            Excel::import(new ClearDefectImport, request()->file('excel'));
            alert()->success('成功', '清檢缺失資料匯入成功');
            return back();
        } catch (\Exception $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }
}
