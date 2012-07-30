<?php

class Post extends AdminAppModel {

    public $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'cover' => array(
                'dir' => 'img{DS}uploads{DS}images',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                'default' => 'default.jpg'
            )
        )
    );
    public $validate = array(
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'The title of the post is required',
                'required' => true,
            ),
            'minLength' => array(
                'rule' => array('minLength', 5),
                'message' => 'Usernames must be at least 5 characters long.'
            ),
        ),
        'resume' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'The resume of the post is required',
                'required' => true
            )
        ),
        'active' => array(
            'rule' => array('boolean'),
            'message' => 'Incorrect value for post status',
            'required' => true
        ),
        'featured' => array(
            'rule' => array('boolean'),
            'message' => 'Incorrect value for featured',
            'required' => true
        )
    );
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

}