<?php
$opt[1] =  "--vertical-label Clients --title \"Clients for $hostname / $servicedesc\" ";

$def[1] =  rrd::def("clients", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::hrule($WARN[1], "#FFFF00", "Warning");
$def[1] .= rrd::hrule($CRIT[1], "#FF0000", "Critical\l");
$def[1] .= rrd::area("clients", "#8FBBC4", "Clients");
$def[1] .= rrd::line1("clients", "#000000");
$def[1] .= rrd::gprint("clients", "LAST",     "Last %2.0lf");
$def[1] .= rrd::gprint("clients", "MIN",      "\tMin %2.0lf");
$def[1] .= rrd::gprint("clients", "MAX",      "\tMax %2.0lf");
$def[1] .= rrd::gprint("clients", "AVERAGE",  "\tAverage %2.0lf");

$opt[2] =  "--vertical-label \"CCQ %\" --title \"CCQ for $hostname / $servicedesc\" ";

$def[2] =  rrd::def("ccq", $RRDFILE[2], $DS[2], "AVERAGE");
$def[2] .= rrd::hrule($WARN[2], "#FFFF00", "Warning");
$def[2] .= rrd::hrule($CRIT[2], "#FF0000", "Critical\l");
$def[2] .= rrd::gradient("ccq", "#FFFFFF", "#41BF91", "CCQ");
$def[2] .= rrd::gprint("ccq", "LAST",     "Last %2.0lf%%");
$def[2] .= rrd::gprint("ccq", "MIN",      "\tMin %2.0lf%%");
$def[2] .= rrd::gprint("ccq", "MAX",      "\tMax %2.0lf%%");
$def[2] .= rrd::gprint("ccq", "AVERAGE",  "\tAverage %2.0lf%%");
?>
