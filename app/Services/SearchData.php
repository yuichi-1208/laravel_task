<?php

namespace App\Services;

class SearchData
{
  public static function search($data){
      // 全角スペースを半角へ
      $search_split = mb_convert_kana($data, 's');

      // 空白で区切る
      $search_split2 = preg_split('/[\s]+/', $search_split, -1,PREG_SPLIT_NO_EMPTY);

      return $search_split2;
  }
}
