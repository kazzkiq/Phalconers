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
	    
	    $matchEmail = self::query()
	    	->where('mail = :email:')
	    	->bind(['email', $email])
	    	->execute();
	    	
	    $hashPass = $matchEmail[0]->password;
	    
	    if($matchEmail[0] !== false)
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

}
