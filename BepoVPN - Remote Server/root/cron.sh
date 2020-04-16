#!/bin/sh

# BepoVPN Remote Server v1.0x
# Waring v1.0x uses plain text no password encryption.

log=/tmp/bepo-vpn-check.log

# Backup config files
conf_bk "/etc/ppp/chap-secrets"

wget https://$VPN-API-SEVER/api/vpn-user-credentials -O /etc/ppp/chap-secrets


service ipsec restart
service xl2tpd restart

# Update file attributes
chmod 600 /etc/ppp/chap-secrets

# NOTE: All VPN users will share the same IPsec PSK.
# If you forgot the PSK, check /etc/ipsec.secrets.

exit 0
