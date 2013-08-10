<?php
// Include modelName file path

include_once ("deviceDescription.php");
include_once ("brandName.php");
include_once ("modelName.php");
include_once ("modelCategory.php");
include_once ("sar.php");
include_once ("addInfo.php");

print "\n";
print "Device description: "; print deviceDescription(2);
print "\n\n";
print "Brand: "; print brandName(1);

$brandName = brandName(1);
$bid = 1;
$mid = 1;
$cid = 3;

print "\n\n";
print "Model: "; print modelName($brandName, $bid, $mid);
print "\n\n";
print "Model category: "; print modelCategory($brandName, $bid, $mid, $cid);
print "\n\n";
print "SAR: "; print sar($brandName, $bid, $mid, $cid); print " W/kg";
print "\n\n";

$addInfo = addInfo($brandName, $bid, $mid, $cid);

if ($addInfo == "")
{
    print "No Additional Information!!!";
}
else
{
    print "Additional Information: ".$addInfo;
}

print "\n\n";

?>
