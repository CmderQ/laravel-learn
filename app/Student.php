<?php
/**
 * Created by PhpStorm.
 * Filename:  Student.php
 * User:      cmder
 * Date:      2018/1/21
 * Time:      17:28
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEX_UN = 10;//未知
    const SEX_BOY = 20;//男
    const SEX_GIRL = 30; //女

    //指定表名
    protected $table = 'student';

    //自动维护时间戳
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function sexToName($ind = null)
    {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GIRL => '女',
        ];

        if($ind != null){
            return array_key_exists($ind, $arr) ? $arr[$ind]:$arr[self::SEX_UN];
        }
        return $arr;
    }
}