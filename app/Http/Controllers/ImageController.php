<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
   public function upload(Request $request)
   {
        // ディレクトリ名
      $dir = 'image';
      $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
      $request->file('image')->storeAs('public/' . $dir, $file_name);

      // ファイル情報をDBに保存
      $image = new Image();
      $image->img_path = $file_name;
      $image->img_path = 'storage/' . $dir . '/' . $file_name;
      $image->save();


      return redirect('/');
   }
}