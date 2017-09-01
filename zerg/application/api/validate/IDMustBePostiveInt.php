<?php
/**
 * Created by PhpStorm.
 * User: giga
 * Date: 2017/9/1
 * Time: 14:10
 */

namespace app\api\validate;



class IDMustBePostiveInt extends  BaseValidate
{
    protected $rule =[
        'id'=>'require|isPostiveInteger'
    ];

    protected function  isPostiveInteger($value,$rule='',$data = '',$field= ''){

        //is_numeric（）判断是不是数字
        //is_int()判断是不是整形
        //($value +0 )>0 判断是不是大于0
        if (is_numeric($value) && is_int($value+0) && ($value +0 )>0 ) {
            return true;
        }else{
            return $field."必须是正整数。";
        }


    }

}