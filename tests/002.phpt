--TEST--
rar_list() function
--SKIPIF--
<?php if(!extension_loaded("rar")) print "skip"; ?>
--FILE--
<?php

$rar_file1 = rar_open(dirname(__FILE__).'/linux_rar.rar'); 
$list1 = rar_list($rar_file1);
var_dump($list1);

$rar_file2 = rar_open(dirname(__FILE__).'/latest_winrar.rar'); 
$list2 = rar_list($rar_file2);
var_dump($list2);

?>
--EXPECTF--
array(2) {
  [0]=>
  object(RarEntry)#%d (10) {
    ["rarfile"]=>
    resource(%d) of type (Rar)
    ["name"]=>
    string(9) "plain.txt"
    ["unpacked_size"]=>
    int(15)
    ["packed_size"]=>
    int(25)
    ["host_os"]=>
    int(3)
    ["file_time"]=>
    string(19) "2004-06-11 11:01:24"
    ["crc"]=>
    string(8) "7728b6fe"
    ["attr"]=>
    int(33188)
    ["version"]=>
    int(29)
    ["method"]=>
    int(51)
  }
  [1]=>
  object(RarEntry)#%d (10) {
    ["rarfile"]=>
    resource(%d) of type (Rar)
    ["name"]=>
    string(30) "test file with whitespaces.txt"
    ["unpacked_size"]=>
    int(14)
    ["packed_size"]=>
    int(20)
    ["host_os"]=>
    int(3)
    ["file_time"]=>
    string(19) "2004-06-11 11:01:32"
    ["crc"]=>
    string(8) "21890dd9"
    ["attr"]=>
    int(33188)
    ["version"]=>
    int(29)
    ["method"]=>
    int(51)
  }
}
array(2) {
  [0]=>
  object(RarEntry)#%d (10) {
    ["rarfile"]=>
    resource(%d) of type (Rar)
    ["name"]=>
    string(5) "1.txt"
    ["unpacked_size"]=>
    int(5)
    ["packed_size"]=>
    int(17)
    ["host_os"]=>
    int(2)
    ["file_time"]=>
    string(19) "2004-06-11 10:07:18"
    ["crc"]=>
    string(8) "a0de71c0"
    ["attr"]=>
    int(32)
    ["version"]=>
    int(29)
    ["method"]=>
    int(53)
  }
  [1]=>
  object(RarEntry)#%d (10) {
    ["rarfile"]=>
    resource(%d) of type (Rar)
    ["name"]=>
    string(5) "2.txt"
    ["unpacked_size"]=>
    int(5)
    ["packed_size"]=>
    int(16)
    ["host_os"]=>
    int(2)
    ["file_time"]=>
    string(19) "2004-06-11 10:07:26"
    ["crc"]=>
    string(8) "45a918de"
    ["attr"]=>
    int(32)
    ["version"]=>
    int(29)
    ["method"]=>
    int(53)
  }
}
