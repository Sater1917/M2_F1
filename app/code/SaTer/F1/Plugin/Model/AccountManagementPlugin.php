<?php
namespace Sater\F1\Plugin\Model;
use Magento\Customer\Model\AccountManagement; 
    
    /**
     * Class AccountManagementPlugin
     *
     * @category  Colgee
     * @package   Colgee_Sample
     */
    class AccountManagementPlugin
    {
	/**
	 * Before authenticate method
	 *
	 * @param AccountManagement $subject
	 * @param string $username
	 * @param string $password
	 * @return array
	 */
	public function beforeAuthenticate(AccountManagement $subject, $username, $password)
	{
	    // For example
	    $username = 'Insert name here';
			
	    return [$username, $password];
	}
    }