<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * is_protected_javascript Plugin
 *
 * @category    Plugin
 * @author      Chris Rowe
 * @link        http://chri.sr
 */

$plugin_info = array(
    'pi_name'       => 'is_protected_javascript',
    'pi_version'    => '0.1',
    'pi_author'     => 'Chris Rowe',
    'pi_author_url' => 'http://chri.sr',
    'pi_description'=> 'Check global protected_javascript',
    'pi_usage'      => Is_protected_javascript::usage()
);


class Is_protected_javascript {

    public function __construct()
    {
        $this->EE =& get_instance();
        $protect_javascript = ($this->EE->config->config['protect_javascript'] == 'y' ? true : false);
        $this->return_data = $protect_javascript;
    }

    public static function usage() {

        ob_start(); ?>
            {if "{exp:is_protected_javascript}"}yay{if:else}boo{/if}
        <?php
            $buffer = ob_get_contents();
            ob_end_clean();

            return $buffer;

        }

}


/* End of file pi.is_protected_javascript.php */
/* Location: /system/expressionengine/third_party/is_protected_javascript/pi.is_protected_javascript.php */
