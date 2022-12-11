<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'service' => [
        'title' => 'Services',

        'actions' => [
            'index' => 'Services',
            'create' => 'New Service',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            
        ],
    ],

    'patient' => [
        'title' => 'Patients',

        'actions' => [
            'index' => 'Patients',
            'create' => 'New Patient',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'mobile_number' => 'Mobile number',
            
        ],
    ],

    'appointment' => [
        'title' => 'Appointments',

        'actions' => [
            'index' => 'Appointments',
            'create' => 'New Appointment',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'patient_id' => 'Patient',
            'dateTime' => 'DateTime',
            'purpose' => 'Purpose',
            'status' => 'Status',
            
        ],
    ],

    'schedule' => [
        'title' => 'Schedules',

        'actions' => [
            'index' => 'Schedules',
            'create' => 'New Schedule',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'day' => 'Day',
            'time' => 'Time',
            
        ],
    ],

    'feedback' => [
        'title' => 'Feedbacks',

        'actions' => [
            'index' => 'Feedbacks',
            'create' => 'New Feedback',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'patient_id' => 'Patient',
            'rating' => 'Rating',
            'description' => 'Description',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];