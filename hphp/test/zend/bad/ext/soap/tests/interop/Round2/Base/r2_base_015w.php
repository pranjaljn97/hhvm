<?php
class SOAPStruct {
    function SOAPStruct($s, $i, $f) {
        $this->varString = $s;
        $this->varInt = $i;
        $this->varFloat = $f;
    }
}

$struct1 = new SOAPStruct('arg',34,325.325);
$struct2 = new SOAPStruct('arg',34,325.325);
$client = new SoapClient(dirname(__FILE__)."/round2_base.wsdl",array("trace"=>1,"exceptions"=>0));
$client->echoStructArray(array($struct1,$struct2));
echo $client->__getlastrequest();
$HTTP_RAW_POST_DATA = $client->__getlastrequest();
include("round2_base.inc");
echo "ok\n";
?>
