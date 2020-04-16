<?php

# Disable PHH error reporting

error_reporting(0);

$whmcskey = $_GET[whmcskey];

$VPN_USER = $_GET[username];

$VPN_PASSWORD = $_GET[password];

# Security Key WHMCS - Unique Key!

if($whmcskey =="09340311176954161725976211897241956117745049044952") {

echo shell_exec("sed -i '/^\"$VPN_USER\" /d' vpn-user-credentials > vpn-user-credentials.tmp 2>&1");

echo exec("mv vpn-user-credentials.tmp vpn-user-credentials");
echo exec("chmod 600 vpn-user-credentials");

echo "VPN User Terminated";
}

else {
die("API Key is wrong!");
}

?>
