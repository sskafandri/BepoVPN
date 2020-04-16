BepoVPN VPN

Waring v1.0x uses plain text no password encryption.

Encryption coming in v1.5x

WHMCS Module: v1.0x

Installation Instructions.

Please module inside of WHMCS server folder.

Install VPN API to a VPS or Dedicated Server. API will control the creation suspension and termination of VPS accounts.

VPN Install:

Please follow https://github.com/hwdsl2/setup-ipsec-vpn. 

VPN - API Master Communication.

Place the file cron.sh in crontab -e under the root user:

sh /root/cron.sh

How BepoVPN works!

1. BepoVPN uses a API to communiate with VPN Servers.
2. cron.sh (Cron) is used to download every VPN user to each VPN server every minute.
3. BepoVPN WHMCS modules communites with API to terminate, suspend and create accounts.

Copyright @ DavidBrockway 2020

