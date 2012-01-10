<?php
header("Content-type: text/css");
$d = detect();
$b = $d['browser'];
$v = $d['version'];
$o = $d['os'];
function detect()
    {
    $browser = array ("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI");
    $os = array ("WIN","MAC");
    $info['browser'] = "OTHER";
    $info['os'] = "OTHER";
    foreach ($browser as $parent)
        {
        $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
        $f = $s + strlen($parent);
        $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 5);
        $version = preg_replace('/[^0-9,.]/','',$version);
        if ($s)
            {
            $info['browser'] = $parent;
            $info['version'] = $version;
            }
        }
    foreach ($os as $val)
        {
        if (eregi($val,strtoupper($_SERVER['HTTP_USER_AGENT']))) $info['os'] = $val;
        }
    return $info;
    } 