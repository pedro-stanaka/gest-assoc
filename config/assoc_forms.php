<?php

$config = [
    'Templates' => [
        'small' => [
            'inputContainer' => '<div class="form-group {{type}}" {{required}}>{{content}}</div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control {{attrs.class}}" {{attrs}}/>',
            'inputContainerError' =>
                '<div class="form-group has-error {{type}} {{required}}">
                    {{content}}
                    <p class="help-block">{{error}}</p></div>',
            'error' => '{{content}}',
            'inputSubmit' => '<input type="{{type}}" class="btn btn-primary" {{attrs}} role="button" />',
            'button' => '<button class="btn btn-primary" {{attrs}} role="button">{{text}}</button>'
        ]
    ]
];