<?php

/*
#################################################################################################################
This is an OPTIONAL configuration file.
The role of this file is to make updating of "tinyfilemanager.php" easier.
So you can:
-Feel free to remove completely this file and configure "tinyfilemanager.php" as a single file application.
or
-Put inside this file all the static configuration you want and forgot to configure "tinyfilemanager.php".
#################################################################################################################
*/

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$4dt6fpbNUxUvixu11sHbzu07tqD/gyN2nrf2z6KYU3wIcdzlkkE62',
    '202001020022' => '$2y$10$NZ/nqtULQvsvNi3VIx4PT.xO7KdoFpL.a8ckILgpaq5a9sZjAUrOa', 
    '202003040001' => '$2y$10$zN19b3OrIhgPhpsivfqOGu3FrorlA/gXMZPw4kT7tW9GatGY7AOvi', 
    '202003040002' => '$2y$10$fkBIlIqmS26igELKXY9svOZLm1rTs11eSvMnH2kIEObPZLVLKcQh2', 
    '202003040003' => '$2y$10$e2wueszWnslBzGcScWyWbumszPwO6RmP.bRURvu/NlpW1sWPOG9bO', 
    '202003040004' => '$2y$10$N5vfzyhVC3b8lFj/v/Uz1uc8IjQlsZM5WUsEDjsJ6eD2pePgIrHMG', 
    '202003040005' => '$2y$10$nyTMHzQrrD4oK1pC790phuGOrK1/ODM98G5cl2jKmIZenZX/QNtWm', 
    '202003040006' => '$2y$10$g9hOGqIxrj4WC2TNfRzz2.SO92/UfZ0GEP76if/wJ0kvdPhTAvgay', 
    '202003040007' => '$2y$10$/FW49HYPoGeDeEzvC3ozKOEepoMEMXcvaJpUaL69sUHrdK9jYRYDq', 
    '202003040008' => '$2y$10$U4kE9Ec1k6nyXi/xez0QgeDROJV4eFY4SvwaWSmisyOStYVZkLueW', 
    '202003040009' => '$2y$10$9yW/Fa6cO6oNMBLjuPJohuFTUi2SGj3ZvrHaOFtg0CMQiT0ILzs0G', 
    '202003040010' => '$2y$10$LYFpRDXvP/Mb3uCXgPaIP.rkHFO/fqBCR1Y.URVQC1qhWIczKi5/e', 
    '202003040011' => '$2y$10$UZC/FnENDcz48hTbKuot3Oq37gO5LunRtYBuzoqtaRuMXduOd/Nl.', 
    '202003040012' => '$2y$10$EHWwheIYXEn15i.1BJm9Tu7zSwX37ONhhfpuGaods3ZLjuvZE398a', 
    '202003040013' => '$2y$10$FBiwm7BdzSR5H/kmIiPZWO6kh3m.r90ZuRz4XW4NYHG5ZFJPsDEK6', 
    '202003040014' => '$2y$10$2QXihbhnXtoykh6YAdOu.OSbksaeBpTJqwzI6Y6/m1p2n9t8eiZ6y', 
    '202003040015' => '$2y$10$qwgnzUpw2SLczgOAV0Gr6urYRI3G5CLTtZ2ts1dyL0d9ha4JPhyLa', 
    '202003040016' => '$2y$10$fgo4munXR65hG1G5Fstq4OTLOXecRMsM1t5WoCbm2b8rCd1nErTEq', 
    '202003040017' => '$2y$10$GfV6aZL3vWnv6Gl6KmZ2EuM58G0gZuQVvMmP7aAHs1fbb/mAD7Rae', 
    '202003040018' => '$2y$10$jZfpfLYTqJgyuIY.3A8mHeSAxiFKJpz2z6Pk73/j/W8l5J7a3IkOO', 
    '202003040019' => '$2y$10$fkDy88sgki2QQOZ8WjuAWOjHuTOzI/Gxu0ucTkYZ8gGCKoJiad/Sy', 
    '202003040020' => '$2y$10$2/Uk2Du1AlQkX5hTxvrZye.Ji28D6e3/IaD8s2rqhyrQoMmDIndSy', 
    '202003040021' => '$2y$10$1jBgsCPEg.Yz/m1.yJzdm.Of2B1zohOJ4J6wiDRVzLpNKOyYTdI3K', 
    '202003040022' => '$2y$10$OuaI66zbfOHZ.7IkR3M9mu5fuUkI1mZ49RGQU94WcnBQj/lAqdxa6', 
    '202003040023' => '$2y$10$Uuc9t8xFyX3.fD/R9X70Eu/RcIw1TqahQ/uZlK5vSsCAwC0NfcdZ6', 
    '202003040024' => '$2y$10$eJ7.6BPbY2tb.k.kwla6qu4KsVd7RFp4WZwQQ3zWGjmdTv6zw5D/S', 
    '202003040025' => '$2y$10$EjCM7li1oDEOPYsJDIrj3.5nAJ6KCAKrmITfqpiSN6TK9OsD8VQwO', 
    '202003040026' => '$2y$10$1erAtyeGItCxc8e/ze/oR.VoVNTWS1DnxfvHfxsHSq8gDopGf7nmS', 
    '202003040027' => '$2y$10$UFJN8ef5PDfBYMGbiItqseYHopNW54KXoTKoK/CNl4euLDqBPi9Fy', 
    '202003040028' => '$2y$10$XJL9FT6hkhz.p4zyCkgtr.9UYXocR2DtiLi7lrldTIDI/s.IqtL/e', 
    '202003040029' => '$2y$10$Uku7btL23ucjn/4h728k4uRhqtl6IGoPQotG5bEIqV9u3XGL/0kCu', 
    '202003040030' => '$2y$10$Aan6wR/Cn8rcbVlvfkoyYOsaEA.capE74dahrAd/wyqaHtmCBEOAu', 
    '202003040031' => '$2y$10$nXyCmPqXcEJkOIP2Kaxvyuh3y8tevggWjzog0poFMr3/4zKPrzE8m', 
    '202003040032' => '$2y$10$vhL.7M5Bkk0XIDCsUn/Lcu4LI8M1DcFigan25d11zgxxxqG/k6rJ6', 
    '202003040033' => '$2y$10$MmVYLm.Xw9AHV7kBfgUloOdP5QZy0Ktpj0QE0Kt/f7msrHdduN/RW', 
    '202003040034' => '$2y$10$On8z1gt9zMH45qVun0xXu.65HI.76KtShxVqMl2IwEe5UrtSNfbii', 
    '202003040035' => '$2y$10$/I.HFJi2hQIBcHPAm8Jpm.xCcx6d45OavTwisrWJSleJvi5wMg5mK', 
    '202003040036' => '$2y$10$0J.Bsocx8oQSIpmmiz3qh.zz4e0xeRpDdWP7fh6rxhef3mfwcbllW', 
    '202003040037' => '$2y$10$eMb4zUCEWm9wlIsG8YwQ/udOWm4AdIFj5QE9vUIMMggpVjUr2IGwu', 
    '202003040038' => '$2y$10$1DbAXNyd1/E8/MREqrzOs.jSe79Y/Q/acHZf4xW98Q7UCP8ReG8NG', 
    '202003040039' => '$2y$10$8JyuVOBovSJFJmu769cAXeRYNHFNn0WdVewPmN6P2i6LtweWcVBmS', 
    '202003040040' => '$2y$10$3XD88U2JJ7dsC/E55flexOujhQoUu83cjlyVEsNsx8BWj313gPCVa', 
    '202003040041' => '$2y$10$kPfqWdYUBUjaJzpc6QuoUul2WIrKd7aYJjfQa/jHkN0POZvHsjs3C', 
    '202003040042' => '$2y$10$R9jGEhhpF01xzcrULYDP5eTWkCedDR82FCx9v2yE.Somf/jHidbPC', 
    '202003040043' => '$2y$10$wq1KEAFfIAeUBRMgxivac.lLZN6Jxy4.jIOn.jIN1cmsUKFTvvEYy', 
    '202003040044' => '$2y$10$OEABl4pC0SDAOcmgT2CiTeVb6H.OqZRRZB6.fLOv0QJVvpW1g55/O', 
    '202003040045' => '$2y$10$DOshZqcvshNr6X.12/K/z.zQzNAF63k0en8rApxwpXM1qJzu.P1q6', 
    '202003040046' => '$2y$10$VXQej22r6P4SZzeRrFOsSuwgysLWSh8GWgdoygDJ32U1FbfFNK1CC', 
    '202003040047' => '$2y$10$fXC22i0GueBV07oDI9NcJeAIceg8FGLiTgTHeEyI5rhOZGa52v.E2', 
    '202003040048' => '$2y$10$TgRJ/CjPmOdMR15Mf/YE5uEHNY9hNCbWvARdHWwHSZorLvgWq3b1m', 
    '202003040049' => '$2y$10$.jFZbjEAV8V9OLmib0h5U.TKJlDyjAMp5l.PC6is1YgkFJxpWUywu', 
    '202003040050' => '$2y$10$q2y2snq7Nbx8sxo9sOY3Cu4z2037ZGLAGDBneusz8tvwy.Vrhi.lK', 
    '202003040051' => '$2y$10$w5cmu2fsmRi/bMUux6dkd.MZ8uqJ.7BQ5GiEzBFH.omguXCP3q7Cm', 
    '202003040052' => '$2y$10$3V8tFAGMLw9Om/WwWpXPf.FaWWXXFHNp9hEwTfT0nc8ZXcFANVKx.', 
    '202003040053' => '$2y$10$2gaD2xc3Zwn1mho.eROnFOzTpnyX8Xa.etWPYb657Spd4mW80tvma', 
    '202003040054' => '$2y$10$iYKB4emnfOE1cKDSOG9iauT/Kg8rdBsy0PiK7OL6pve2Zlk0INNfO', 
    '202003040055' => '$2y$10$QcL9AgLUTgq/aBvGhlG0tuFnupstUqX8lof5oQZseY0qTbsz0C8dK', 
    '202003040056' => '$2y$10$Wni/UspjbQJNRgod.RqoVumS.Xee4j9/nNplVbPfU.TCpThImzaKS', 
    '202003040057' => '$2y$10$sZYHsmV4rcJoMvOQczHXvO1CVcn1qjBMKL.MMOFbNtiQ0X6OGjjem', 
    '202003040058' => '$2y$10$gsB4FIh5cwX7/vkrGetFs.gg9RwnAoPjpnmp75gbcK.QzBrp8OGQC', 
    '202003040059' => '$2y$10$0NAei9suuODBw1dau2.FW.W2DGqfVAQvBx2SpCfUzS9/XPCe7uuu2', 
    '202003040060' => '$2y$10$jmLICZQMkUcMjeD1186b6et4m9tKlmpnvxRGNHCKCoJ3XWGigujeq', 
    '202007090214' => '$2y$10$SG6/3KIn571C6cXjRE0ri.4Pj.wQux6tvE8nIdqOYmVKRLAx63Mpm', 
    '202010010005' => '$2y$10$A2EoPwYJnd/76ZofdsUTAuS9bjjioaoXziZV2PcqSB4/7eqKeH9Ki', 
    '202011080057' => '$2y$10$11ZruKHj9WliQvUvRbj2E.eYn84cQm9iQ8FUXadSmQ4ZZMN1Ln0ga', 
    '202083030065' => '$2y$10$M.Ipnwpg1C48ZenrsMQm3ebsuT2I/NgdfrV.4DHIE2ePrVKX/KO8G', 
    '202091040063' => '$2y$10$ygLAJMcYRH3ZGs/i33oPmubGVdBrVXd1kJ/MacP.IdqqrMkj6BocK', 
    '202095060068' => '$2y$10$.xYESSWgDJywNXmEt5CU3O2l3S.b0U.4C9xTcu5lWKi/ehxVtSuVC', 
    
);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    
);

//set application theme
//options - 'light' and 'dark'
$theme = 'light';

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
//$default_timezone = 'Etc/UTC'; // UTC
$default_timezone = 'Asia/Shanghai';

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
//$directories_users = array();
$directories_users = array(
    'admin' => '/var/www/db-s22',
    '202001020022' => '/var/www/db-s22/202001020022',
    '202003040001' => '/var/www/db-s22/202003040001',
    '202003040002' => '/var/www/db-s22/202003040002',
    '202003040003' => '/var/www/db-s22/202003040003',
    '202003040004' => '/var/www/db-s22/202003040004',
    '202003040005' => '/var/www/db-s22/202003040005',
    '202003040006' => '/var/www/db-s22/202003040006',
    '202003040007' => '/var/www/db-s22/202003040007',
    '202003040008' => '/var/www/db-s22/202003040008',
    '202003040009' => '/var/www/db-s22/202003040009',
    '202003040010' => '/var/www/db-s22/202003040010',
    '202003040011' => '/var/www/db-s22/202003040011',
    '202003040012' => '/var/www/db-s22/202003040012',
    '202003040013' => '/var/www/db-s22/202003040013',
    '202003040014' => '/var/www/db-s22/202003040014',
    '202003040015' => '/var/www/db-s22/202003040015',
    '202003040016' => '/var/www/db-s22/202003040016',
    '202003040017' => '/var/www/db-s22/202003040017',
    '202003040018' => '/var/www/db-s22/202003040018',
    '202003040019' => '/var/www/db-s22/202003040019',
    '202003040020' => '/var/www/db-s22/202003040020',
    '202003040021' => '/var/www/db-s22/202003040021',
    '202003040022' => '/var/www/db-s22/202003040022',
    '202003040023' => '/var/www/db-s22/202003040023',
    '202003040024' => '/var/www/db-s22/202003040024',
    '202003040025' => '/var/www/db-s22/202003040025',
    '202003040026' => '/var/www/db-s22/202003040026',
    '202003040027' => '/var/www/db-s22/202003040027',
    '202003040028' => '/var/www/db-s22/202003040028',
    '202003040029' => '/var/www/db-s22/202003040029',
    '202003040030' => '/var/www/db-s22/202003040030',
    '202003040031' => '/var/www/db-s22/202003040031',
    '202003040032' => '/var/www/db-s22/202003040032',
    '202003040033' => '/var/www/db-s22/202003040033',
    '202003040034' => '/var/www/db-s22/202003040034',
    '202003040035' => '/var/www/db-s22/202003040035',
    '202003040036' => '/var/www/db-s22/202003040036',
    '202003040037' => '/var/www/db-s22/202003040037',
    '202003040038' => '/var/www/db-s22/202003040038',
    '202003040039' => '/var/www/db-s22/202003040039',
    '202003040040' => '/var/www/db-s22/202003040040',
    '202003040041' => '/var/www/db-s22/202003040041',
    '202003040042' => '/var/www/db-s22/202003040042',
    '202003040043' => '/var/www/db-s22/202003040043',
    '202003040044' => '/var/www/db-s22/202003040044',
    '202003040045' => '/var/www/db-s22/202003040045',
    '202003040046' => '/var/www/db-s22/202003040046',
    '202003040047' => '/var/www/db-s22/202003040047',
    '202003040048' => '/var/www/db-s22/202003040048',
    '202003040049' => '/var/www/db-s22/202003040049',
    '202003040050' => '/var/www/db-s22/202003040050',
    '202003040051' => '/var/www/db-s22/202003040051',
    '202003040052' => '/var/www/db-s22/202003040052',
    '202003040053' => '/var/www/db-s22/202003040053',
    '202003040054' => '/var/www/db-s22/202003040054',
    '202003040055' => '/var/www/db-s22/202003040055',
    '202003040056' => '/var/www/db-s22/202003040056',
    '202003040057' => '/var/www/db-s22/202003040057',
    '202003040058' => '/var/www/db-s22/202003040058',
    '202003040059' => '/var/www/db-s22/202003040059',
    '202003040060' => '/var/www/db-s22/202003040060',
    '202007090214' => '/var/www/db-s22/202007090214',
    '202010010005' => '/var/www/db-s22/202010010005',
    '202011080057' => '/var/www/db-s22/202011080057',
    '202083030065' => '/var/www/db-s22/202083030065',
    '202091040063' => '/var/www/db-s22/202091040063',
    '202095060068' => '/var/www/db-s22/202095060068',
);

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/datetime.format.php
$datetime_format = 'd.m.y H:i:s';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = 'gif,png,jpg,jpeg,html,htm,txt,css,js,json,svg,ico,pdf,zip,doc,docx';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = 'gif,png,jpg,jpeg,html,htm,txt,css,js,json,svg,ico,pdf,zip,doc,docx';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array(
    '*.php',
    'assets',
    'libs',
    'SleekDB',
    'database'
);

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// google => View documents using Google Docs Viewer
// microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'microsoft';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;


// max upload file size
$max_upload_size_bytes = 5000;

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

?>
