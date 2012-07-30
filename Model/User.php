<?php

class User extends AdminAppModel {

    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notempty'),
                'message' => 'Name can not be empty'
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Type an valid email',
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => true,
                'message' => 'This email already exists'
            )
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => array('notempty'),
                'message' => 'Password can not be empty',
                'allowEmpty' => false,
                'required' => true
            ),
            'confirmPassword' => array(
                'rule' => array('confirmPassword', 'password'),
                'message' => 'Passwords do not match'
            )
        ),
        'password_confirm' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Password Confirmation can not be empty',
                'allowEmpty' => false,
                'required' => true,
            )
        )
    );
    
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post',
            'foreignKey' => 'user_id',
            'dependent' => false,
        )
    );

    
    function confirmPassword($data) {
        if (AuthComponent::password($data['password']) == AuthComponent::password($this->data['User']['password_confirm']))
            return true;
        return false;
    }

    public function beforeSave() {
        unset($this->data['User']['password_confirm']);
        if (isset($this->data[$this->alias]['password']) && $this->alias['password'] != $this->data[$this->alias]['password']) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}
