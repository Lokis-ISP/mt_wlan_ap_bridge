<?php
$opt[1] =  "--vertical-label Clients --title \"Clients for $hostname / $servicedesc\" ";

$def[1] =  rrd::def("clients", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::hrule($WARN[1], "#FFFF00", "Warning");
$def[1] .= rrd::hrule($CRIT[1], "#FF0000", "Critical\l");
$def[1] .= rrd::area("clients", "#8FBBC4", "Clients");
$def[1] .= rrd::line1("clients", "#000000");
$def[1] .= "GPRINT:clients:LAST:\"Last %2.0lf\" ";
$def[1] .= "GPRINT:clients:MIN:\"Min %2.0lf\" ";
$def[1] .= "GPRINT:clients:MAX:\"Max %2.0lf\" ";
$def[1] .= "GPRINT:clients:AVERAGE:\"Average %2.2lf\" ";


$opt[2] =  "--vertical-label \"CCQ %\" --title \"CCQ for $hostname / $servicedesc\" ";

$def[2] =  rrd::def("ccq", $RRDFILE[2], $DS[2], "AVERAGE");
$def[2] .= rrd::hrule($WARN[2], "#FFFF00", "Warning");
$def[2] .= rrd::hrule($CRIT[2], "#FF0000", "Critical\l");
$def[2] .= rrd::gradient("ccq", "#FFFFFF", "#41BF91", "CCQ");
$def[2] .= "GPRINT:ccq:LAST:\"Last %2.0lf%%\" ";
$def[2] .= "GPRINT:ccq:MIN:\"Min %2.0lf%%\" ";
$def[2] .= "GPRINT:ccq:MAX:\"Max %2.0lf%%\" ";
$def[2] .= "GPRINT:ccq:AVERAGE:\"Average %2.0lf%%\" ";
?>
