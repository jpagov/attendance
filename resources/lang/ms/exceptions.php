<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists'    => 'Peranan telah wujud. Sila pilih nama yang lain.',
                'cant_delete_admin' => 'Anda tidak boleh menghapus peranan Pentadbir.',
                'create_error'      => 'Terdapat masalah mewujudkan peranan ini. Sila cuba lagi.',
                'delete_error'      => 'Terdapat masalah menghapus peranan ini. Sila cuba lagi.',
                'has_users'         => 'Anda tidak boleh menghapus peranan yang mempunyai pengguna sesia ada.',
                'needs_permission'  => 'Anda mesti memilih sekurang-kurangnya satu kebenaran bagi peranan ini.',
                'not_found'         => 'Peranan tidak wujud.',
                'update_error'      => 'Terdapat masalah semasa mengemas kini peranan ini. Sila cuba lagi.',
            ],

            'users' => [
                'cant_deactivate_self'  => 'Anda tidak boleh berbuat demikian kepada diri sendiri.',
                'cant_delete_admin'  => 'Anda tidak boleh menghapus pentadbir utama.',
                'cant_delete_self'      => 'Anda tidak boleh menghapus diri sendiri.',
                'cant_delete_own_session' => 'Anda tidak boleh menghapus sesi anda sendiri.',
                'cant_restore'          => 'Pengguna ini belum dihapus dan tidak boleh dipulihkan.',
                'create_error'          => 'Terdapat masalah mewujudkan pengguna ini. Sila cuba lagi.',
                'delete_error'          => 'Terdapat masalah menghapus pengguna ini. Sila cuba lagi.',
                'delete_first'          => 'Pengguna ini perlu dihapus terlebih dahulu sebelum ia boleh dihapus secara kekal.',
                'email_error'           => 'Alamat e-mel tersebut dipunyai oleh pengguna lain.',
                'mark_error'            => 'Terdapat masalah semasa mengemas kini pengguna ini. Sila cuba lagi.',
                'not_found'             => 'Pengguna tidak wujud.',
                'restore_error'         => 'Terdapat masalah memulihkan pengguna ini. Sila cuba lagi.',
                'role_needed_create'    => 'Anda mesti memilih sekurang-kurangnya satu peranan.',
                'role_needed'           => 'Anda mesti memilih sekurang-kurangnya satu peranan.',
                'session_wrong_driver'  => 'Pengurusan sesi driver perlu ditetapkan dalam pangkalan data untuk menggunakan ciri tersebut.',
                'update_error'          => 'Terdapat masalah semasa mengemas kini pengguna ini. Sila cuba lagi.',
                'update_password_error' => 'Terdapat masalah menukar kata laluan pengguna ini. Sila cuba lagi.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Akaun anda telah disahkan sebelum ini.',
                'confirm'           => 'Sahkan akaun anda!',
                'created_confirm'   => 'Akaun anda telah berjaya dicipta. Kami telah menghantar kepada anda e-mel untuk mengesahkan akaun anda.',
                'mismatch'          => 'Kod pengesahan anda tidak sepadan.',
                'not_found'         => 'Kod pengesahan tersebut tidak wujud.',
                'resend'            => 'Akaun anda belum disahkan. Sila rujuk pautan pengesahan dalam e-mel anda yang dihantar sebelum ini, atau <a href="'.route('frontend.auth.account.confirm.resend', ':user_id').'">klik disini</a> untuk menghantar semula e-mel pengesahan.',
                'success'           => 'Akaun anda berjaya disahkan!',
                'resent'            => 'A new confirmation e-mail has been sent to the address on file.',
            ],

            'deactivated' => 'Your account has been deactivated.',
            'email_taken' => 'That e-mail address is already taken.',

            'password' => [
                'change_mismatch' => 'That is not your old password.',
            ],

            'registration_disabled' => 'Registration is currently closed.',
        ],
    ],
];
