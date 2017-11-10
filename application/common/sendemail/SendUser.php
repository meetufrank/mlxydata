<?php
namespace app\common\sendemail;
use email\Cs;
use core\cases\logic\ChatUserLogic;
class SendUser
{
    
    /*
     * AM应用的layim用户表添加
     */
    public function addSend($user=[],$type=1){
        //调用email接口方法
	    $emails = new Cs();
		
		//为1请求发送邮件
		$to = $user['email'];
		
		//邮件主题
       
        $url='http://'.$_SERVER['HTTP_HOST'];
        $user['url']=$url;
              if($type==1){
                  $is='user';
              }else{
                  $is='manager';
              }
		$YouxiangContent=ChatUserLogic::getInstance()->getLanguage($user,2); //获取短信内容
		$emailtrue = $emails->activeEmail($to,$YouxiangContent['title'],$YouxiangContent['content'][$is]);
    }
        /*
     * AM应用的layim用户表修改密码
     */
    public function editSend($user=[]){
        //调用email接口方法
	    $emails = new Cs();
		
		//为1请求发送邮件
		$to = $user['email'];
	$url='http://'.$_SERVER['HTTP_HOST'];
        $user['url']=$url;
		//邮件主题
        
	$YouxiangContent=ChatUserLogic::getInstance()->getLanguage($user,3); //获取短信内容
		
		$emailtrue = $emails->activeEmail($to,$YouxiangContent['title'],$YouxiangContent['content']);
    }
    
    /*
     * am应用layim的casemanger接受case
     */
       public function acceptCase($user=[]){
        //调用email接口方法
	    $emails = new Cs();
		
		//为1请求发送邮件
		$to = $user['email'];
	$url='http://'.$_SERVER['HTTP_HOST'];
        $user['url']=$url;
		//邮件主题
        
	$YouxiangContent=ChatUserLogic::getInstance()->getLanguage($user,6); //获取短信内容
		
		$emailtrue = $emails->activeEmail($to,$YouxiangContent['title'],$YouxiangContent['content']);
    }
    
    
    
    
    //预约邮件
    public function yuyueemail($to,$subject,$body,$receivingparty){
        //调用email接口方法
        $emails = new Cs();
        $emails->sentemail($to,$subject,$body,$receivingparty);
    }
}



