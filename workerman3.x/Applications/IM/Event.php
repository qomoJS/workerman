<?php
/**
 * 
 * 聊天主逻辑
 * 主要是处理 onMessage onClose 
 * @author walkor < walkor@workerman.net >
 * 
 */
use \GatewayWorker\Lib\Gateway;
use \GatewayWorker\Lib\Store;

class Event
{
   
   /**
    * 有消息时
    * @param int $client_id
    * @param string $message
    */
   public static function onMessage($client_id, $message)
   {

		

   }
   
   /**
    * 当客户端断开连接时
    * @param integer $client_id 客户端id
    */
   public static function onClose($client_id)
   {

        
   }
   
  
 
  
   

}








