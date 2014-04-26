<?php
/**
 * Login Header Controller
 *
 * @package WordPress
 * @subpackage Controllers
 */
namespace Tgt\Controllers;

/**
 * LoginHeaderController
 *
 * Add a login and logout menu to the header
 *
 * @uses BaseController
 * @package WordPress
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0
 */
class LoginHeaderController extends BaseController
{

    /**
     * loginHeaderAddition
     *
     * Modifies output of header navigation menu
     *
     * @param str $outputHtml Full HTML
     * @param str $navHtml    Navigation HTML
     * @param arr $navArgs    Navigation menu arguments
     * @return str
     */
    public function loginHeader($outputHtml, $navHtml, $navArgs)
    {
        $data = new \stdClass;

        $data->userLoggedInStatus = "loggedIn";
        $data->logInOutHtml       = wp_loginout(get_home_url(), false);

        if (!is_user_logged_in()) {
            $data->userLoggedInStatus = "loggedOut";
            $data->logInFormHtml      = wp_login_form(array('echo' => false));
        }

        $firstPosition  = strpos($outputHtml, "right date");
        $secondPosition = strpos($outputHtml, "</ul>", $firstPosition);

        ob_start();
        $this->render('loginOutForm', $data);
        $loginText = ob_get_contents();
        ob_end_clean();

        $newOutput = substr_replace($outputHtml, $loginText, $secondPosition, 0);

        return $newOutput;
    }
}
