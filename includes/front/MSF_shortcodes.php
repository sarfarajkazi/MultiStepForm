<?php

/**
 * MSF Load front styles and scripts
 *
 * Manage Short codes
 *
 * @since 1.0.0
 */
class MSF_shortcodes
{
    /**
     * Initial class
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        add_shortcode('display_form', array($this, 'display_form_callback'));
        add_action('init', array($this, 'submit_form_callback'));
    }

    function display_form_callback()
    {
        ob_start();
        include_once 'templates/form_layout.php';
        wp_enqueue_style("range-slider");
        wp_enqueue_style("jquery-steps");
        wp_enqueue_script('custom-js-validation');
        wp_enqueue_script('additional-methods');
        wp_enqueue_script('bootstrap-min-js');
        wp_enqueue_script('rangeSlider');
        wp_enqueue_script('step-form');
        wp_enqueue_script('front_script');
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    function submit_form_callback()
    {
        if (isset($_POST['form-nonce']) && wp_verify_nonce($_POST['form-nonce'], 'submit-form')) {
            $headers[] = "MIME-Version: 1.0" . "\r\n";
            $headers[] = "Content-type: text/html; charset=UTF-8" . "\r\n";
            $household = $disposed = '';
            if (isset($_POST['household']) && !empty($_POST['household'])) {
                $household = implode(', ', $_POST['household']);
            }
            if (isset($_POST['household-lift']) && !empty($_POST['household-lift'])) {
                $household_lift = "Ja";
            } else {
                $household_lift = "Nein";
            }
            if (isset($_POST['disposed']) && !empty($_POST['disposed'])) {
                $disposed = implode(', ', $_POST['disposed']);
            }
            $html_body = '
                  <p><b>Formular-Details</b></p>
                  <p><b>Was ausgeräumt werden sollte?</b> : ' . $_POST["cleared-out"] . '</p>
                  <p><b>Wie viele Quadratmeter beträgt die Fläche?</b> : ' . $_POST["square-meters"] . 'm<sup>2</sup></p>
                  <p><b>Von welchem Stockwerk soll der Hausrat abgeholt werden?</b> : ' . $household . '</p>
                  <p><b>Aufzug zum Ausräumen vorhanden</b> : ' . $household_lift . '</p>
                  <p><b>Welche Gegenstände sollten entsorgt werden?</b> : ' . $disposed . '</p>
                  <p><b>Nachrichtenfeld</b> : ' . $_POST["describe-mission"] . '</p>
                  <p><b>Vollständiger Name</b> : ' . $_POST['Vorname'] . ' ' . $_POST['Nachname'] . '</p>
                    <p><b>Telefon</b> : ' . $_POST['Telefon'] . '</p>
                    <p><b>Email</b> : ' . $_POST['Email'] . '</p>
                    <p><b>PLZ</b> : ' . $_POST['PLZ'] . '</p>
                  ';
            $subject = "Trash Cost Calculator on " . get_bloginfo("name");
            $admin_email = get_bloginfo('admin_email');
            $main_content = email_template("", "Admin", $html_body);
            wp_mail($admin_email, $subject, $main_content, $headers);
            wp_redirect(site_url('kostenrechner?msg=success'));
            die;
        }
    }
}

return new MSF_shortcodes();