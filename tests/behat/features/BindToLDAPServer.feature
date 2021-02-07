Feature: Bind to existing Server(s)
  I needd to be able to bind to an LDAP server

  Scenario: Anonymous binding to a single server via non-tls
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    And accepting anonymous binding
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via non-tls
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    And accepting anonymous binding
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via non-tls
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    And accepting anonymous binding
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldaps using TLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Anonymous binding to a single server via ldap and STARTTLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Named binding to a single server via non-tls
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    When I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    Then I get a valid connection result

  Scenario: Named binding to a single server via ldaps using TLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldaps://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    Then I get a valid connection result

  Scenario: Named binding to a single server via ldaps using TLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldaps://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    Then I get a valid connection result

  Scenario: Named binding to a single server via ldap and STARTTLS secured by a known CA
    Given  there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificate is issued by "LetsEncrypt"
    When I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Named binding to a single server via ldap and STARTTLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "certificate.crt"
    And I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    And start STARTTLS
    Then I get a valid connection result

  Scenario: Named binding to a single server via non-tls fails without password
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    When I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password ""
    Then an Exception "InvalidBindWithoutPassword" is thrown

  Scenario: Named binding to a single server via non-tls fails with the wrong password
    Given there is an ldap-server "ldap.example.com" listening on the default non-tls port
    When I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "wrongpassword"
    Then an Exception "InvalidBindWithWrongPassword" is thrown

  Scenario: Binding to an unknown ldap-server does not work
    Given there is no ldap-server "ldap.example.com" listening on the default non-tls port
    When I bind to "ldap://ldap.example.com" with DN "uid=Manager,dc=example,dc=com" and password "masterpassword"
    Then an Exception "LdapServerCanNotBeReached" is thrown

  Scenario: Binding to a single server via ldaps using TLS secured by an unknown self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And the TLS-Certificate is self-signed
    When I set the certificate file to "unknowncertificate.crt"
    And I bind to "ldaps://ldap.example.com" with DN "" and password ""
    Then an Exception "TLSConnectionCouldNotBeEstablished" is thrown

  Scenario: Binding to a single server via ldap and STARTTLS secured by self-signed certificate
    Given there is an ldap-server "ldap.example.com" listening on the default tls-port
    And accepting anonymous binding
    And the TLS-Certificarte is self-signed
    When I set the certificate file to "unknowncertificate.crt"
    And I bind to "ldap://ldap.example.com" with DN "" and password ""
    And start STARTTLS
    Then an Exception "TLSConnectionCouldNotBeEstablished" is thrown

