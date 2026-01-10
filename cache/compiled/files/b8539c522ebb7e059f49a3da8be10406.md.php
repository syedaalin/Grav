<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/pages/01.home_backup/_06istafta/istafta.md',
    'modified' => 1767941591,
    'size' => 1024,
    'data' => [
        'header' => [
            'title' => 'Have a specific question?',
            'cache_enable' => false,
            'form' => [
                'name' => 'istafta-form',
                'action' => '/#istafta',
                'fields' => [
                    'question' => [
                        'type' => 'text',
                        'label' => 'Your Question',
                        'placeholder' => 'Ask your question...',
                        'classes' => 'flex-1 bg-white/5 border border-white/10 rounded-xl px-6 py-3 outline-none focus:border-accent-gold transition-colors text-sacred-white w-full',
                        'item_class' => 'flex-1',
                        'validate' => [
                            'required' => true,
                            'message' => 'Please enter a question'
                        ]
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Submit Query',
                        'classes' => 'btn-sacred px-8 cursor-pointer'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.from }}'
                            ],
                            'subject' => '[Istafta] New Question',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'message' => 'Your query has been submitted for review.'
                    ],
                    2 => [
                        'display' => '/'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Have a specific question?
cache_enable: false
form:
    name: istafta-form
    action: /#istafta
    fields:
        question:
            type: text
            label: Your Question
            placeholder: Ask your question...
            classes: "flex-1 bg-white/5 border border-white/10 rounded-xl px-6 py-3 outline-none focus:border-accent-gold transition-colors text-sacred-white w-full"
            item_class: "flex-1"
            validate:
                required: true
                message: "Please enter a question"
    buttons:
        submit:
            type: submit
            value: Submit Query
            classes: "btn-sacred px-8 cursor-pointer"
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
                - "{{ config.plugins.email.from }}"
            subject: "[Istafta] New Question"
            body: "{% include \'forms/data.html.twig\' %}"
        - message: "Your query has been submitted for review."
        - display: /',
        'markdown' => ''
    ]
];
