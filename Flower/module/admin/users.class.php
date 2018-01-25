<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 17:40
 */

class users extends admin
{
    public $str='';
    function init(){

        $db=new db('user');
        $this->userList();
        $this->s->assign("str",$this->str);
        $this->s->display('admin/user.html');
    }
    function userList(){
        $db=new db('user');
        $arr=$db->selAll();
        foreach ($arr as $item){
            $this->str.="
                <tr class=\"success\">
                                            <td>{$item['id']}</td>
                                            <td>{$item['name']}</td>
                                            <td>{$item['password']}</td>
                                            <td class='juzhong'>
                                                <img src=\"{$item['img']}\" alt=\"\">
                                            </td>
                                            <td>{$item['sex']}</td>
                                            <td>{$item['brithday']}</td>
                                            <td>{$item['tel']}</td>
                                            <td>{$item['email']}</td>
                                            <td>{$item['jifen']}</td>
                                            <td>{$item['gongsi']}</td>
                                            <td>{$item['zhengshu']}</td>
                                            <td>
                                                <textarea class='text' readonly>{$item['descs']}</textarea>
                                            </td>
                                            <td>
                                                <textarea class='text' readonly>{$item['pingjia']}</textarea>

                                            </td>
                                        </tr>
            ";

        }
//        $this->s->assign('str',$this->str);

    }





}