<?php
/**
 * Created by PhpStorm.
 * User: giga
 * Date: 2017/9/1
 * Time: 11:18
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;


class Banner
{
    /*  $data = ['id' => $id ];
       $validate = new IDMustBePostiveInt();
       $result = $validate->batch()->check($data);
       if ($result){

       }else{


       }*/
    /**
     * 获取指定id的banner信息
     * @url  /banner/:id
     * @http Get
     * @param $id  banner的id号
     */
    public function getBanner($id ){

        (new IDMustBePostiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id );
        //异常处理



        return  ;








    }

}