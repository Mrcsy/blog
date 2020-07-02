<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //1.关联的数据表
    public $table = 'permission';

    //2.主键
    public $primaryKey = 'id';

    //3.允许批量操作的字段
//    public $fillable = ['user_name','user_pass','email','phone'];

    //4.是否维护created_at 和updated_at 字段

    public $timestamps = false;
}
