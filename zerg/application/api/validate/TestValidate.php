<?php
/**
 * Created by PhpStorm.
 * User: giga
 * Date: 2017/9/1
 * Time: 11:49
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends  Validate
{
    protected $rule = [
        'name'=>'require|max:10',
        'email'=>'email'
    ] ;

}