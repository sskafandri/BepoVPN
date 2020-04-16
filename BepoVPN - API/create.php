<?php

# Disable PHH error reporting

error_reporting(0);

$whmcskey = $_GET[whmcskey];

$VPN_USER = $_GET[username];

$VPN_PASSWORD = $_GET[password];

# Security Key WHMCS - Unique Key!

Please change the key below on your installation.

The key below is an example key!

if($whmcskey =="09340311176954161725976211897241956117745049044952") {
  
  exec("echo '$VPN_USER l2tpd $VPN_PASSWORD *' >> vpn-user-credentials");
  echo "VPN User Created";
}

else {
die("API Key is wrong!");
}

?>
