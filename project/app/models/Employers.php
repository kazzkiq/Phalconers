<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Employers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $dateAdd;

    /**
     *
     * @var string
     */
    public $dateMod;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $companyName;

    /**
     *
     * @var string
     */
    public $companyWebsite;

    /**
     *
     * @var string
     */
    public $companyTagline;

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }
    
    public function exists($email, $pass)
    {
	    
	    $matchEmail = $this->findFirst(["email = :email:", "bind" => ["email" => $email]]);
	    
	    $hashPass = $matchEmail->password;
	    
	    if(!!$matchEmail)
	    {
		    $matchPassword = Bcrypt::check($pass, $hashPass);
		    if($matchPassword)
		    {
			    return true;
		    }else
		    {
			    return false;
		    }
	    }else
	    {
		    return false;
	    }
	    
    }
    
    public function getCurrent($email)
    {
	    $hasEmployer = $this->findFirst(["email = :email:", "bind" => ["email" => $email]]);
	    
	    if(!!$hasEmployer)
	    {
		    return $hasEmployer;
	    }else
	    {
		    return false;
	    }
    }

}
