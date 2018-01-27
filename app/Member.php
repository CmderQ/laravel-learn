<?php
/**
 * Created by PhpStorm.
 * Filename:  Member.php
 * User:      cmder
 * Date:      2018/1/21
 * Time:      15:50
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getMember()
    {
        return 'member name is sean';
    }
}