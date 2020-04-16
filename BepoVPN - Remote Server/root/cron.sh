#!/bin/sh

# BepoVPN Remote Server v1.0x
# Waring v1.0x uses plain text no password encryption.

log=/tmp/bepo-vpn-check.log

wget https://$VPN-API-SEVER/api/vpn-user-credentials -O /etc/ppp/chap-secrets

service ipsec restart
service xl2tpd restart
