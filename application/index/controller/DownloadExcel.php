<?php
namespace app\index\controller;
use think\loader;
use think\Controller;
/*
 * @Description: 简易Excel下载基类
 * @Date: 2019-10-17 16:11:58
 * @Author: Wong Symbol
 * @LastEditors: Wong Symbol
 * @LastEditTime: 2019-10-17 17:23:26
 */
class DownloadExcel extends Controller{
    public $writer = '';
    public function _initialize(){
        Loader::import('PHP_XLSXWriter.xlsxwriter', EXTEND_PATH, '.class.php');
        $this->writer = new \XLSXWriter();
    }

    public function create(){
        $this->writer = new \XLSXWriter();
        return $this->writer;
    }

    public function setHeader($header = []){
        foreach($header as $k => $v){
            $sheetHeader[$v] = 'string';
        }
        $this->writer->writeSheetHeader('Sheet1',  $sheetHeader);
    }
    /**
     * @description: 
     * @param array $data 需要填充的数据 
     * @param array $index 数组下标，与header一一对应
     * @return: 
     */
    public function setData($data = [], $index = []){
        foreach($data as $k => $v){
            $row = [];
            foreach($index as $i => $j){
                $row[] = $v[$j];
            }
            $this->writer->writeSheetRow('Sheet1', $row);
        }
    }

    public function setFilenameAndDownload($file_name){
        $file_name = $file_name.'.xlsx';
        $this->writer->writeToFile($file_name);
        header('Content-Description: File Transfer'); //描述页面返回的结果
        header('Content-Type: application/octet-stream'); //返回内容的类型，此处只知道是二进制流。具体返回类型可参考http://tool.oschina.net/commons
        header('Content-Disposition: attachment; filename='.$file_name.'.xlsx');//可以让浏览器弹出下载窗口
        header('Content-Transfer-Encoding: binary');//内容编码方式，直接二进制，不要gzip压缩
        header('Expires: 0');//过期时间
        header('Cache-Control: must-revalidate');//缓存策略，强制页面不缓存，作用与no-cache相同，但更严格，强制意味更明显
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));//文件大小，在文件超过2G的时候，filesize()返回的结果可能不正确
        set_time_limit(0);
        readfile($file_name);
    }

    
}