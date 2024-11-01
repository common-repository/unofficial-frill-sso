<?php

namespace unofficial\frill\sso;

class Settings
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'frill_sso_settings_page']);
        add_action('admin_init', [$this, 'frill_sso_register_settings']);
    }
    public function frill_sso_settings_page()
    {
        add_options_page('Frill SSO Settings', 'Frill SSO', 'manage_options', 'frill-sso', [$this, 'frill_sso_render_settings_page']);
    }
    public function frill_sso_render_settings_page()
    {
        if (!current_user_can('manage_options')) {
            return;
        }
        ?>
		<div class="wrap">
			<h2><?php 
        _e('Frill SSO settings', 'unofficial-frill-sso');
        ?></h2>
			<form action="options.php" method="post">
				<?php 
        settings_fields('frill_sso_settings');
        ?>
				<?php 
        do_settings_sections('frill_sso_settings');
        ?>
				<input name="submit" class="button button-primary" type="submit" value="<?php 
        esc_attr_e('Save');
        ?>" />
			</form>
		</div>

		<?php 
    }
    public function frill_sso_register_settings()
    {
        register_setting('frill_sso_settings', 'frill_sso_settings');
        add_settings_section('frill_sso_api', 'Api Settings', [$this, 'frill_sso_section_text'], 'frill_sso_settings');
        add_settings_field('frill_sso_key', 'SSO KEY *', [$this, 'frill_sso_key_callback'], 'frill_sso_settings', 'frill_sso_api');
        add_settings_field('frill_sso_url', 'Frill Url *', [$this, 'frill_sso_url_callback'], 'frill_sso_settings', 'frill_sso_api');
        add_settings_field('frill_sso_login', 'WordPress login url', [$this, 'frill_sso_login_url_callback'], 'frill_sso_settings', 'frill_sso_api');
    }
    public function frill_sso_section_text()
    {
        echo '<p>' . __('Enter the credentials found on your frill settings page', 'unofficial-frill-sso') . '</p>';
    }
    public function frill_sso_key_callback()
    {
        $options = get_option('frill_sso_settings');
        $value = '';
        $placeholder = '';
        if ($options && isset($options['key']) && $options['key'] !== '') {
            $value = $options['key'];
            $placeholder = $value;
        }
        ?>
			<input id="frill_sso_settings_key" name="frill_sso_settings[key]" type="password" value="<?php 
        echo esc_attr($value);
        ?>" placeholder="<?php 
        echo esc_attr($placeholder);
        ?>" required/>
		<?php 
    }
    public function frill_sso_url_callback()
    {
        $options = get_option('frill_sso_settings');
        $value = '';
        if($options && isset($options['url']) && $options['url'] !== ''){
            $value = $options['url'];
        }
        ?>
		<input id="frill_sso_settings_url" name="frill_sso_settings[url]" type="url" value="<?php
        echo esc_url($value);
        ?>" placeholder="https://example.frill.co" required/>
		<?php 
    }

    public function frill_sso_login_url_callback()
    {
        $option = get_option('frill_sso_settings');
        $value = '';
        if($option && isset($option['login'])){
            $value = $option['login'];
        }
        ?>
        <input id="frill_sso_settings_login" name="frill_sso_settings[login]" type="url"
               value="<?php echo esc_url($value); ?>" placeholder="<?php echo get_home_url() . '/wp-login.php'; ?>"><br>
        <small><?php echo __('Leave empty if you want to have the default login page', 'unofficial-frill-sso'); ?></small>
        <?php
    }
}
\class_alias('unofficial\\frill\\sso\\Settings', 'Settings', \false);
