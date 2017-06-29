<?php

namespace App\Library;

class MessageHandler
{
    /**
    * Holds all messages according to their type
    *
    * @category Message Container
    * @example 'Message Type' => array($message,..)
    * @var array
    */
    private static $messages;
    
    /**
    * Counts the total errors assigned to '$messages'
    *
    * @category Counter
    * @var int
    */
    public static $errors = 0;
    
    /**
    * Auto-Resets all data after executing 'get' functions.
    *
    * @category Feature Toggle
    * @var boolean Default value = true
    */
    public static $autoReset = TRUE;
    
    /**
    * Adds a message to proper Message-Type key.
    *
    * Valid Types: 'error', 'success', 'info'
    *
    * @param string $type  Type of the message
    * @param string $message   Text of the message
    * @return string   'Fatal error message' -> In case of an unknown type
    */
    public static function addMessage($type, $message)
    {
        if($type != 'error' ^ $type != 'success' ^ $type != 'info'){
            die('Fatal error:<br>'
            . 'From: "MessageHandler" class "addMessage" function<br>'
            . 'Unknown message type - Please check the message types you have inserted.<br>'
            . 'Valid Types: \'error\', \'success\', \'info\'.');
        }
        if($type == 'error'){
            self::$errors += 1;
        }
        self::$messages[$type][] = $message;
    }
    
    /**
    * Returns html representation of all '$messages'
    *
    * Returns: <$htmlTag id="$htmlId" class="$Message-Type">$message</$htmlTag>
    *
    * Default values: TAG = 'div', ID = 'message'
    *
    * Features: Auto-Reset
    *
    * @param string HTML tag
    * @param string HTML id
    * @return string   (html string)
    */
    public static function getMessagesAsHTML($htmlTag = 'div', $htmlId = 'message')
    {
        $htmlMessage = '';
        
        foreach (self::$messages as $key => $value){
            foreach (self::$messages[$key] as $value){
                $htmlMessage .= "<$htmlTag id=\"$htmlId\" class=\"$key\">$value</$htmlTag>\n";
            }
        }
        if(self::$autoReset){
            self::resetAll();
        }
        return $htmlMessage;
    }
    /**
    * Returns all $messages as plain text
    *
    * Features: Auto-Reset
    *
    * @return string
    */
    public static function getMessagesAsText()
    {
        $getMessage = '';
        
        foreach (self::$messages as $key => $value){
            foreach (self::$messages[$key] as $value){
                $getMessage .= "$value\n";
            }
        }
        if(self::$autoReset){
            self::resetAll();
        }
        return $getMessage;
    }
    
    /**
    * Returns all messages as an array.
    *
    * Features: Auto-Reset
    * @return array
    */
    public static function getMessages()
    {
        $messagesAsArray = self::$messages;
        if(self::$autoReset){
            self::resetAll();
        }
        return $messagesAsArray;
    }
    
    /**
    * Resets all data
    */
    public static function resetAll()
    {
        self::$messages = array();
        self::$errors = 0;
    }
}