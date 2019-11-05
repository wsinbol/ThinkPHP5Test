<?php
/*
 * @Description: 测试DownloadExcel下载类
 * @Date: 2019-10-17 16:45:27
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-10-22 13:37:08
 */

namespace app\index\controller;
use app\index\controller\DownloadExcel;

class TestDownloadExcel{
    
    public function index(){
        $downloader = new DownloadExcel();
        $downloader->setData([
            ['a'=>1,'b'=>2,'c'=>3, 'd'=>4],
            ['a'=>11,'b'=>12,'c'=>13, 'd'=>14]
        ],['a','b','c','d']);
        $downloader->setFilenameAndDownload('hello');
    }
}