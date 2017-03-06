<?php
/**
 * User: webrx
 * Date: 2017/3/6 11:51
 *  Ver: 1.0
 * Info:
 */
namespace webrx\phputil{
    class db{
        public function getPass(){
            return uniqid();
        }
        public function test(){
            echo 'test - phputil - ok!!!';
        }
    }
}