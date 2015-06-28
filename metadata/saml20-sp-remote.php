<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */
/*
$metadata['https://samltest--EDB.cs13.my.salesforce.com'] = array(
    'entityid' => 'https://samltest--EDB.cs13.my.salesforce.com',
    'AssertionConsumerService' => 'https://samltest--EDB.cs13.my.salesforce.com?so=00DW0000008wtK6',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'User.Email',
    'SingleLogoutService' => 'https://www.scilld.com/simplesaml/saml2/idp/SingleLogoutService.php',
);
*/

$metadata['https://samltest--EDB.cs13.my.salesforce.com'] = array (
  'entityid' => 'https://samltest--EDB.cs13.my.salesforce.com',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'expire' => 1750118701,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://samltest--EDB.cs13.my.salesforce.com?so=00DW0000008wtK6',
      'index' => 0,
      'isDefault' => true,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://edb-enterprisedbpartners.cs13.force.com/Customer/login?so=00DW0000008wtK6',
      'index' => 1,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://edb-enterprisedbpartners.cs13.force.com/Partner/login?so=00DW0000008wtK6',
      'index' => 2,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://edb-enterprisedbpartners.cs13.force.com/login?so=00DW0000008wtK6',
      'index' => 3,
    ),
  ),
  'SingleLogoutService' =>
   array (
     0 =>
     array ( 
       'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
       'Location' => 'https://www.scilld.com/logout',
       'index' => 0,
     ),
  ),  
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
  'simplesaml.nameidattribute' => 'User.Email',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIErDCCA5SgAwIBAgIOAU3fWHMQAAAAAHWQSrEwDQYJKoZIhvcNAQELBQAwgZAx
KDAmBgNVBAMMH1NlbGZTaWduZWRDZXJ0XzEwSnVuMjAxNV8yMTIwMjQxGDAWBgNV
BAsMDzAwRFcwMDAwMDA4d3RLNjEXMBUGA1UECgwOU2FsZXNmb3JjZS5jb20xFjAU
BgNVBAcMDVNhbiBGcmFuY2lzY28xCzAJBgNVBAgMAkNBMQwwCgYDVQQGEwNVU0Ew
HhcNMTUwNjEwMjEyMDI1WhcNMTcwNjEwMTIwMDAwWjCBkDEoMCYGA1UEAwwfU2Vs
ZlNpZ25lZENlcnRfMTBKdW4yMDE1XzIxMjAyNDEYMBYGA1UECwwPMDBEVzAwMDAw
MDh3dEs2MRcwFQYDVQQKDA5TYWxlc2ZvcmNlLmNvbTEWMBQGA1UEBwwNU2FuIEZy
YW5jaXNjbzELMAkGA1UECAwCQ0ExDDAKBgNVBAYTA1VTQTCCASIwDQYJKoZIhvcN
AQEBBQADggEPADCCAQoCggEBAKeHWVXJaIeuBxV0/d/JGrpGA156EavcGlscqiak
edjVESFJUaPeXpYNrFB98+14NrEr12TTCoVm9458NJawDA78uFlu34wL7k4rbbbZ
e4aUOoaCuLOZvCQwQdhFZs4jk2oURuVGUFzaFTUKfBapFpxmAlcECM6DP1eb/3Vi
EQhpy6/W/LAV7XcMCVjeBv+XapJb7l/Y4oPQ5vVxFdjrnlaXQjtLQjNQcnh3fOpg
4N6d4x8pWE9WcCjazWVyeJT4kSdl0K5vLkWlwIaNII/jfggLc3oavSp6On/LCAzt
VtT3NCNcA1lXgeWWJzJwgnGGVkSyILH2fE92rkygbJ9YW7UCAwEAAaOCAQAwgf0w
HQYDVR0OBBYEFIKw3sG/MnHaDY9hx1NLn636MarVMA8GA1UdEwEB/wQFMAMBAf8w
gcoGA1UdIwSBwjCBv4AUgrDewb8ycdoNj2HHU0ufrfoxqtWhgZakgZMwgZAxKDAm
BgNVBAMMH1NlbGZTaWduZWRDZXJ0XzEwSnVuMjAxNV8yMTIwMjQxGDAWBgNVBAsM
DzAwRFcwMDAwMDA4d3RLNjEXMBUGA1UECgwOU2FsZXNmb3JjZS5jb20xFjAUBgNV
BAcMDVNhbiBGcmFuY2lzY28xCzAJBgNVBAgMAkNBMQwwCgYDVQQGEwNVU0GCDgFN
31hzEAAAAAB1kEqxMA0GCSqGSIb3DQEBCwUAA4IBAQB7l4t6viW27Xd24BZTkeHw
1j34eL7mAB/Y92eNROdNmh56qJDgcSD1/EZswW3blNsinHHkT/aCykjp0CbNsnNM
GYFXqdhzVy0fo/dMn3ZLAo8IZtbh6182WMCfY/E9vw5HLu2GOtm4hn2GDP38C0lN
3FQyEF0jbBTpFF4PzEOj0mwRRVuGxBJ75GbKPCr5kKzidoTPTDSPckYMB/zXV+FK
XVQmctS+Ecvt6c2FK5GY0BT5cSQnN24Xx5ctbx1NjpNZWf+E1RJl4Sx4InOoG0N5
cjvxy6ig864ydatjBet9lOEYRd8DlezLpdaoZG6v2TMuzrNW/3UQoPGCFyNcEcye',
    ),
  ),
  'validate.authnrequest' => true,
  'saml20.sign.assertion' => true,
);
