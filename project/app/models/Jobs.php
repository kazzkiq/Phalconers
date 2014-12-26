<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Jobs extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $employerId;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var integer
     */
    public $isRemote;

    /**
     *
     * @var integer
     */
    public $budgetType;

    /**
     *
     * @var integer
     */
    public $budgetStart;

    /**
     *
     * @var integer
     */
    public $budgetMax;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $phone;

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

}
