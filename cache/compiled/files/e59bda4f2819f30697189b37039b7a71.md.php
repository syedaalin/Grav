<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/pages/04.ask/form.md',
    'modified' => 1768171022,
    'size' => 2252,
    'data' => [
        'header' => [
            'title' => 'Ask a Scholar',
            'form' => [
                'name' => 'istafta-submission',
                'action' => '/ask',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Your Name',
                        'placeholder' => 'Enter your name (optional if anonymous)',
                        'type' => 'text',
                        'validate' => [
                            'required' => false
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email Address',
                        'placeholder' => 'For a private response',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'question',
                        'label' => 'Your Question',
                        'placeholder' => 'State your query clearly...',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'anonymous',
                        'label' => 'Ask Anonymously',
                        'type' => 'toggle',
                        'default' => 0,
                        'options' => [
                            1 => 'PLUGIN_ADMIN.YES',
                            0 => 'PLUGIN_ADMIN.NO'
                        ],
                        'help' => 'If enabled, your name and IP address will not be stored.'
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit to Board',
                        'classes' => 'bg-primary text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all'
                    ],
                    1 => [
                        'type' => 'reset',
                        'value' => 'Reset'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => '{{ config.plugins.email.to }}',
                            'subject' => '[Istafta] New Question from {{ form.value.name|default(\'Anonymous\') }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'istafta-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Thank you for your question. Our scholars will review it and get back to you soon.'
                    ],
                    3 => [
                        'redirect' => '/interactive-confirmation'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Ask a Scholar\'
form:
    name: istafta-submission
    action: /ask
    fields:
        -
            name: name
            label: \'Your Name\'
            placeholder: \'Enter your name (optional if anonymous)\'
            type: text
            validate:
                required: false
        -
            name: email
            label: \'Email Address\'
            placeholder: \'For a private response\'
            type: email
            validate:
                required: true
        -
            name: question
            label: \'Your Question\'
            placeholder: \'State your query clearly...\'
            type: textarea
            validate:
                required: true
        -
            name: anonymous
            label: \'Ask Anonymously\'
            type: toggle
            default: 0
            options:
                1: PLUGIN_ADMIN.YES
                0: PLUGIN_ADMIN.NO
            help: \'If enabled, your name and IP address will not be stored.\'
    buttons:
        -
            type: submit
            value: \'Submit to Board\'
            classes: \'bg-primary text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all\'
        -
            type: reset
            value: Reset
    process:
        -
            email:
                from: \'{{ config.plugins.email.from }}\'
                to: \'{{ config.plugins.email.to }}\'
                subject: "[Istafta] New Question from {{ form.value.name|default(\'Anonymous\') }}"
                body: "{% include \'forms/data.html.twig\' %}"
        -
            save:
                fileprefix: istafta-
                dateformat: Ymd-His-u
                extension: txt
                body: "{% include \'forms/data.html.twig\' %}"
        -
            message: \'Thank you for your question. Our scholars will review it and get back to you soon.\'
        -
            redirect: /interactive-confirmation',
        'markdown' => '## Seek Authentic Knowledge

Our board of certified scholars from Qom and Najaf are ready to assist with your contemporary and traditional religious queries.

> [!NOTE]
> Questions are treated with the utmost confidentiality. Please allow 3-5 business days for a detailed scholarly response.
'
    ]
];
