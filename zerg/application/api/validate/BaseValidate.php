<?php
/**
 * Created by PhpStorm.
 * User: giga
 * Date: 2017/9/1
 * Time: 14:37
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends  Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数做校验.
        $params  = Request::instance()->param();

        $result = $this->check($params);
        if (!$result){
           $error  = $this->error;
            throw new Exception($error);
        }else{
            return true ;
        }
    }

}