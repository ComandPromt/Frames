<?php
$marcos=3;
$porcentaje = 100 / $marcos;
print '<frameset rows=\"$porcentaje%,$porcentaje%,*\">'; 
print '<frame  scrolling="no" noresize="noresize" name="m1" src="">';
print '		<frame  scrolling="no" noresize="noresize" name="m3" src="">';
print '		<frame  scrolling="no" noresize="noresize" name="m3" src="">';
print '</frameset>';
?>
