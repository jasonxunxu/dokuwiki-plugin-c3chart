<?php
/**
 * DokuWiki Plugin c3chart (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Jason Xun Xu <dev@jasonxu.net>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class action_plugin_c3chart extends DokuWiki_Action_Plugin {

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller) {

       $controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this, 'handle_tpl_metaheader_output');
   
    }

    /**
     * [Custom event handler which performs action]
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     * @return void
     */

    public function handle_tpl_metaheader_output(Doku_Event &$event, $param) {
        $event->data["script"][] = array (
            "type" => "text/javascript",
            "src" => "//cdnjs.cloudflare.com/ajax/libs/d3/3.4.8/d3.min.js",
            "_data" => "",
        );
        $event->data["script"][] = array (
            "type" => "text/javascript",
            "src" => "//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.min.js",
            "_data" => "",
        );
        $event->data["link"][] = array (
            "type" => "text/css",
            "rel" => "stylesheet",
            "href" => "//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.css",
        );
    }

}

// vim:ts=4:sw=4:et:
