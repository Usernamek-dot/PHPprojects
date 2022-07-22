<?php
print "<h3>Step</h3>";
print "<h3>A.</h3>";

for( $step=50 ; $step<501 ; $step+=25 )
{
print $step . " ";
}

print "<h3>B.</h3>";

for( $j=100 ; $j<501 ; $j+=100 )
{
$op = $j / 20 ;
print $op . " " ;
}
?>