<?php

namespace unofficial\frill\sso;

require 'Token.php';
class RedirectHandler
{
    public function __construct()
    {
        add_action('template_redirect', [$this, 'handle_redirect']);
    }
    public function handle_redirect()
    {
        if (isset($_GET['frill_sso_redirect'])) {
            if (!is_user_logged_in()) {
                $this->redirect_to_wp_login();
            } else {
                $this->redirect_on_click();
            }
        }
        if (isset($_REQUEST['redirect'])) {
            if (!is_user_logged_in()) {
                $this->redirect_to_wp_login();
            }
            $this->redirect_on_SSO();
        }
    }
    private function redirect_to_wp_login()
    {
        $options = get_option('frill_sso_settings');
        $url = wp_login_url(get_home_url() . '?frill_sso_redirect');
        if($options && isset($options['login']) && $options['login'] !== ''){
            $url = esc_url($options['login']);
        }
        \header('Location:' . $url);
        die;
    }
    private function redirect_on_click()
    {
        $options = get_option('frill_sso_settings');
        if (!isset($options['key']) || !isset($options['url'])) {
            return;
        }
        $token = Token::createToken(esc_attr($options['key']));
        $url = esc_url($options['url'] . '?ssoToken=' . $token);
        \header('Location:' . $url);
        die;
    }
    private function redirect_on_SSO()
    {
        $redirect = esc_url($_REQUEST['redirect']);
        if (!$redirect) {
            return;
        }
        $options = get_option('frill_sso_settings');
        if (!isset($options['key']) || !isset($options['url'])) {
            return;
        }
        if (\strpos($redirect, $options['url']) !== \false) {
            $token = Token::createToken(esc_attr($options['key']));
            $url = esc_url($redirect . '?ssoToken=' . $token);
            \header('Location:' . $url);
            die;
        }
    }
}
\class_alias('unofficial\\frill\\sso\\RedirectHandler', 'RedirectHandler', \false);
