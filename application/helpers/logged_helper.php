<?php

function is_logged_in()
{
    $a = get_instance();
    if (!$a->session->userdata('email')) {
        redirect('auth/masuk');
    }
}

function checkAdmin()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('role_id');
    if ($user_session != 1) {
        redirect('page/pengguna/dashboard');
    }
}

function checkPengguna()
{
    $ci = get_instance();
    $user_session = $ci->session->userdata('role_id');
    if ($user_session != 2) {
        redirect('page/admin/dashboard');
    }
}
