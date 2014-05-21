<?php
/**
 * DokuWiki Plugin c3chart (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Jason Xun Xu <dev@jasonxu.net>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

class syntax_plugin_c3chart extends DokuWiki_Syntax_Plugin {
    /**
     * @return string Syntax mode type
     */
    public function getType() {
        return 'substition';
    }
    /**
     * @return string Paragraph type
     */
    public function getPType() {
        return 'block';
    }
    /**
     * @return int Sort order - Low numbers go before high numbers
     */
    public function getSort() {
        return 200;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     */
    public function connectTo($mode) {
        $this->Lexer->addSpecialPattern('<c3>.*?</c3>',$mode,'plugin_c3chart');
    }

    /**
     * Handle matches of the c3chart syntax
     *
     * @param string $match The match of the syntax
     * @param int    $state The state of the handler
     * @param int    $pos The position in the document
     * @param Doku_Handler    $handler The handler
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler &$handler){
        $match = trim($match);
        $c3data = explode("\n", substr($match, 4, -5));
        foreach ($c3data as &$line) {
            $line = trim($line);
        }
        $c3data = implode("", $c3data);
        $chartid = uniqid('__c3chart_');
        $c3data = base64_encode('{"bindto": "#'.$chartid.'",'.$c3data.'}');

        return array($chartid, $c3data);
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string         $mode      Renderer mode (supported modes: xhtml)
     * @param Doku_Renderer  $renderer  The renderer
     * @param array          $data      The data from the handler() function
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer &$renderer, $data) {
        if($mode != 'xhtml') return false;

        list($chartid, $c3data) = $data;
        $renderer->doc .= '<div id="'.$chartid.'"></div>';
        $renderer->doc .= <<<EOS
<script type="text/javascript">/*<![CDATA[*/
c3.generate(jsyaml.load(atob('$c3data')));
/*!]]>*/</script>
EOS;
        return true;
    }
}

// vim:ts=4:sw=4:et:
