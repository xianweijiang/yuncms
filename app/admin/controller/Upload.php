<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: jabber <2898117012@qq.com>
// +----------------------------------------------------------------------


namespace app\admin\controller;

use app\core\upload\FileMate;
use phpDocumentor\Reflection\Types\Null_;

/**
 * Class Upload
 * @package app\admin\controller
 */
class Upload extends AdminBaseController
{
    /**
     * @return \think\response\View
     */
    public function index()
    {
        $upload = \app\core\upload\Upload::getInstent(['uploadType' => 'QiNiu']);
        echo $upload->upload(null);

        die();
        return view();
    }
}
