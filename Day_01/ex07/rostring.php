#!/usr/bin/php
<?php
   $st = explode(' ', $argv[1]);
   $cnt = 1;
   while ($st[$cnt]){
       print($st[$cnt]." ");
       $cnt++;
   }
   print($st[0]);
   print("\n");
?>