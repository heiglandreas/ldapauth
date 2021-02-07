<?phpnamespace Org_Heigl\LdapAuthTest\Behat;use Behat\Behat\Tester\Exception\PendingException;use Behat\Behat\Context\Context;use Behat\Gherkin\Node\PyStringNode;use Behat\Gherkin\Node\TableNode;/** * Defines application features from the specific context. */class FeatureContext implements Context{	/**	 * Initializes context.	 *	 * Every scenario gets its own context instance.	 * You can also pass arbitrary arguments to the	 * context constructor through behat.yml.	 */	public function __construct()	{	}	/**	 * @Given there is an entry at DN :arg1	 */	public function thereIsAnEntryAtDn($arg1)	{		throw new PendingException();	}	/**	 * @Given that entry has an attribute :arg1	 */	public function thatEntryHasAnAttribute($arg1)	{		throw new PendingException();	}	/**	 * @When I search for an entry with filter :arg1	 */	public function iSearchForAnEntryWithFilter($arg1)	{		throw new PendingException();	}	/**	 * @Then I get the DN :arg1 as result	 */	public function iGetTheDnAsResult($arg1)	{		throw new PendingException();	}	/**	 * @Then I get an empty result	 */	public function iGetAnEmptyResult()	{		throw new PendingException();	}	/**	 * @Given there is an ldap-server :arg1 listening on the default non-tls port	 */	public function thereIsAnLdapServerListeningOnTheDefaultNonTlsPort($arg1)	{		throw new PendingException();	}	/**	 * @Given accepting anonymous binding	 */	public function acceptingAnonymousBinding()	{		throw new PendingException();	}	/**	 * @When I bind to :arg1 with DN ":arg2"	 */	public function iBindToWithDn($arg1, $arg2)	{		throw new PendingException();	}	/**	 * @Then I get a valid connection result	 */	public function iGetAValidConnectionResult()	{		throw new PendingException();	}	/**	 * @Given there is an ldap-server :arg1 listening on the default tls-port	 */	public function thereIsAnLdapServerListeningOnTheDefaultTlsPort($arg1)	{		throw new PendingException();	}	/**	 * @Given the TLS-Certificate is issued by :arg1	 */	public function theTlsCertificateIsIssuedBy($arg1)	{		throw new PendingException();	}	/**	 * @Given the TLS-Certificarte is self-signed	 */	public function theTlsCertificarteIsSelfSigned()	{		throw new PendingException();	}	/**	 * @When I set the certificate file to :arg1	 */	public function iSetTheCertificateFileTo($arg1)	{		throw new PendingException();	}	/**	 * @When start STARTTLS	 */	public function startStarttls()	{		throw new PendingException();	}	/**	 * @When I bind to :arg1 with DN :arg2 and password :arg3	 */	public function iBindToWithDnAndPassword($arg1, $arg2, $arg3 = null)	{		throw new PendingException();	}	/**	 * @When I bind to :arg1 with DN :arg2 and password ""	 */	public function iBindToWithDnAndPassword2($arg1, $arg2)	{		$this->iBindToWithDnAndPassword($arg1, $arg2);	}	/**	 * @Then an Exception :arg1 is thrown	 */	public function anExceptionIsThrown($arg1)	{		throw new PendingException();	}	/**	 * @Given there is no ldap-server :arg1 listening on the default non-tls port	 */	public function thereIsNoLdapServerListeningOnTheDefaultNonTlsPort($arg1)	{		throw new PendingException();	}	/**	 * @Given the TLS-Certificate is self-signed	 */	public function theTlsCertificateIsSelfSigned()	{		throw new PendingException();	}	/**	 * @Given the ldap-entry :arg1 exists	 */	public function theLdapEntryExists($arg1)	{		throw new PendingException();	}	/**	 * @Given contains the attribute :arg1 with value :arg2	 */	public function containsTheAttributeWithValue($arg1, $arg2)	{		throw new PendingException();	}	/**	 * @When I retrieve the attributes :arg1 for entry :arg2	 */	public function iRetrieveTheAttributesForEntry($arg1, $arg2)	{		throw new PendingException();	}	/**	 * @Then I will get an array containing only :arg1 as value for key :arg2	 */	public function iWillGetAnArrayContainingOnlyAsValueForKey($arg1, $arg2)	{		throw new PendingException();	}	/**	 * @Then I will get an array containing :arg1 as value for key :arg2	 */	public function iWillGetAnArrayContainingAsValueForKey($arg1, $arg2)	{		throw new PendingException();	}	/**	 * @Then I will get an empty array as value for key :arg1	 */	public function iWillGetAnEmptyArrayAsValueForKey($arg1)	{		throw new PendingException();	}
    /**
     * @Given there is an ldap-server :arg1 listening on the default non-tls port
     */
    public function thereIsAnLdapServerListeningOnTheDefaultNonTlsPort2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given accepting anonymous binding
     */
    public function acceptingAnonymousBinding2()
    {
        throw new PendingException();
    }

    /**
     * @When I bind to :arg1 with DN ":arg2"
     */
    public function iBindToWithDn2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I get a valid connection result
     */
    public function iGetAValidConnectionResult2()
    {
        throw new PendingException();
    }

    /**
     * @Given there is an ldap-server :arg1 listening on the default tls-port
     */
    public function thereIsAnLdapServerListeningOnTheDefaultTlsPort2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given the TLS-Certificate is issued by :arg1
     */
    public function theTlsCertificateIsIssuedBy2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given the TLS-Certificarte is self-signed
     */
    public function theTlsCertificarteIsSelfSigned2()
    {
        throw new PendingException();
    }

    /**
     * @When I set the certificate file to :arg1
     */
    public function iSetTheCertificateFileTo2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When start STARTTLS
     */
    public function startStarttls2()
    {
        throw new PendingException();
    }

    /**
     * @When I bind to :arg1 with DN :arg2 and password :arg3
     */
    public function iBindToWithDnAndPassword3($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @When I bind to :arg1 with DN :arg2 and password ""
     */
    public function iBindToWithDnAndPassword4($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then an Exception :arg1 is thrown
     */
    public function anExceptionIsThrown2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given there is no ldap-server :arg1 listening on the default non-tls port
     */
    public function thereIsNoLdapServerListeningOnTheDefaultNonTlsPort2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given the TLS-Certificate is self-signed
     */
    public function theTlsCertificateIsSelfSigned2()
    {
        throw new PendingException();
    }

    /**
     * @Given a group :arg1 exists
     */
    public function aGroupExists($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given a user :arg1 exists
     */
    public function aUserExists($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given contains the attribute :arg1 with value :arg2
     */
    public function containsTheAttributeWithValue2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I search for the groups of :arg1
     */
    public function iSearchForTheGroupsOf($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I will get a list-object containing :arg1
     */
    public function iWillGetAListObjectContaining($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given the ldap-entry :arg1 exists
     */
    public function theLdapEntryExists2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I retrieve the attributes :arg1 for entry :arg2
     */
    public function iRetrieveTheAttributesForEntry2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I will get an array containing only :arg1 as value for key :arg2
     */
    public function iWillGetAnArrayContainingOnlyAsValueForKey2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I will get an array containing :arg1 as value for key :arg2
     */
    public function iWillGetAnArrayContainingAsValueForKey2($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I will get an empty array as value for key :arg1
     */
    public function iWillGetAnEmptyArrayAsValueForKey2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given there is an entry at DN :arg1
     */
    public function thereIsAnEntryAtDn2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given that entry has an attribute :arg1
     */
    public function thatEntryHasAnAttribute2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I search for an entry with filter :arg1
     */
    public function iSearchForAnEntryWithFilter2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get the DN :arg1 as result
     */
    public function iGetTheDnAsResult2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get an empty result
     */
    public function iGetAnEmptyResult2()
    {
        throw new PendingException();
    }
}
