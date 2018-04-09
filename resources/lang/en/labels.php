<?php

return [
    'modals' => [
        'button_close' => 'Fechar'
    ],
    'emails' => [
        'forgot_password_text' => 'Click here to reset your password:',
    ],
    'auth' => [
        'login' => 'Login',
        'logout' => 'Logout',
        'register' => 'Register',
        'register_button' => 'Register an account',
        'forgot_password' => 'Forgot Your Password?',
        'reset_password' => 'Reset Password',
        'send_password_reset_link' => 'Send Password Reset Link',
        'properties' => [
            'username' => 'Username',
            'email' => 'Email Address',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password',
            'remember' => 'Remember Me',
        ]
    ],
    'accounts' => [
        'singular' => 'Account',
        'plural' => 'Accounts',
        'add_button' => 'Add Account',
        'edit_button' => 'Editar Account',
        'delete_button' => 'Deletar this account',
        'properties' => [
            'date_opened' => 'Data de abertura',
            'name' => 'Name',
            'balance' => 'Saldo',
            'interest' => 'Taxa de Juros',
            'interest_period' => 'Interest Period',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add an Account',
                'close_button' => 'Fechar',
                'save_button' => 'Salvar',
            ],
            'edit' => [
                'title' => 'Editar Account',
                'close_button' => 'Fechar',
                'save_button' => 'Editar',

            ],
            'delete' => [
                'title' => 'Deletar Account',
                'close_button' => 'Fechar',
                'save_button' => 'Deletar',
                'text' => 'Are you sure you want to delete this account? This operation cannot be undone.',
            ],
        ],
    ],
    'bills' => [
        'singular' => 'Conta a pagar',
        'plural' => 'Contas a pagar',
        'add_button' => 'Adicionar conta',
        'edit_button' => 'Editar conta',
        'delete_button' => 'Deletar conta',
        'properties' => [
            'label' => 'Título',
            'amount' => 'Valor',
            'start_date' => 'Data',
            'frequency' => 'Frequencia',
        ],
        'modals' => [
            'create' => [
                'title' => 'Adicionar uma conta a pagar',
                'close_button' => 'Fechar',
                'save_button' => 'Salvar',
            ],
            'edit' => [
                'title' => 'Editar conta',
                'close_button' => 'Fechar',
                'save_button' => 'Editar',

            ],
            'delete' => [
                'title' => 'Deletar conta',
                'close_button' => 'Fechar',
                'save_button' => 'Deletar',
                'text' => 'Tem certeza que deseja deletar esta conta?',
            ],
        ],
    ],
    'calculators' => [
        'singular' => 'Calculadora',
        'plural' => 'Calculadoras',
        'debt' => [
            'label' => 'Calculadora de debito',
            'properties' => [
                'payment' => 'Pagamento mensal',
                'currentBalance' => 'Saldo atual',
                'interestRate' => 'Taxa de juros',
                'minimumPayment' => 'Pagamento minimo',
            ],
        ]
    ],
    'categories' => [
        'singular' => 'Categoria',
        'plural' => 'Categorias',
        'add_button' => 'Adicionar categoria',
        'edit_button' => 'Editar categoria',
        'delete_button' => 'Deletar categoria',
        'properties' => [
            'label' => 'Título',
            'budgeted' => 'Orçamento',
        ],
        'modals' => [
            'create' => [
                'title' => 'Adicionar uma categoria',
                'close_button' => 'Fechar',
                'save_button' => 'Salvar',
            ],
            'edit' => [
                'title' => 'Editar categoria',
                'close_button' => 'Fechar',
                'save_button' => 'Editar',

            ],
            'delete' => [
                'title' => 'Deletar Categoria',
                'close_button' => 'Fechar',
                'save_button' => 'Deletar',
                'text' => 'Você te certeza que quer deletar esta categoria?',
            ],
        ],
    ],
    'goals' => [
        'singular' => 'Objetivo',
        'plural' => 'Objetivos',
        'add_button' => 'Adicionar objetivos',
        'edit_button' => 'Editarar objetivo',
        'delete_button' => 'Deletar objetivo',
        'properties' => [
            'label' => 'Rótulo',
            'amount' => 'Valor',
            'balance' => 'Saldo Atual',
            'goal_date' => 'Data do objetivo',
        ],
        'modals' => [
            'create' => [
                'title' => 'Adicionar um objetivo',
                'close_button' => 'Fechar',
                'save_button' => 'Salvar',
            ],
            'edit' => [
                'title' => 'Editarar objetivo',
                'close_button' => 'Fechar',
                'save_button' => 'Editarar',

            ],
            'delete' => [
                'title' => 'Deletar objetivo',
                'close_button' => 'Fechar',
                'save_button' => 'Deletar',
                'text' => 'Tem certeza que deseja deletar este objetivo?',
            ],
        ],
    ],
    'reports' => [
        'singular' => 'Report',
        'plural' => 'Reports',
        'spending_by_category' => 'Gastos por categoria',
        'spending_over_time' => 'Gastos ao longo do tempo'
    ],
    'transactions' => [
        'singular' => 'Transação',
        'plural' => 'Transações',
        'add_button' => 'Adicionar transação',
        'edit_button' => 'Editarar transação',
        'delete_button' => 'Deletar transação',
        'properties' => [
            'date' => 'Data',
            'account_id' => 'Conta',
            'category_id' => 'Categoria',
            'bill_id' => 'Contas a pagar',
            'payee' => 'Descrição',
            'amount' => 'Valor',
            'inflow' => 'Entrada',
            'outflow' => 'Saída',
            'cleared' => 'Pago',
            'flair' => 'Flair',
        ],
        'modals' => [
            'create' => [
                'title' => 'Adicionar uma transação',
                'close_button' => 'Fechar',
                'save_button' => 'Salvar',
            ],
            'edit' => [
                'title' => 'Editarar transação',
                'close_button' => 'Fechar',
                'save_button' => 'Editarar',

            ],
            'delete' => [
                'title' => 'Deletar transação',
                'close_button' => 'Fechar',
                'save_button' => 'Deletar',
                'text' => 'Tem certeza que deseja deletar a transação?',
            ],
        ],
    ],
];
