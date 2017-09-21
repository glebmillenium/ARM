<?php
    /**
     *   Функция для автоматического подключения smarty
     * с указанием подключаемых файлов *.css, *.js в 
     * виде массива.
     *
     * @param  $css - массив названий, подключаемых css файлов
     *		   $js  - массив названий, подключаемых js файлов
     * @return Smarty 'настроенный Smarty объект'
     */
    function getSmarty($css = array(), $js = array(), $additionalDirectory = "")
    {
        $currentdDirFromScriptFile = dirname(__FILE__);
        $currentDirFromCallScriptFile = getcwd();
        $countSlashSymbols = substr_count(
                substr($currentDirFromCallScriptFile, 
                strspn($currentdDirFromScriptFile, 
                        $currentDirFromCallScriptFile)), '\\');
        define('SMARTY_DIR', $currentdDirFromScriptFile.'/smarty/');
        require(SMARTY_DIR.'Smarty.class.php');

        $smarty = new Smarty ();

        $smarty->template_dir = 
                $currentdDirFromScriptFile.'/tpl/templates/';
        $smarty->compile_dir  = $currentdDirFromScriptFile.
                '/tpl/templates_c/';
        $smarty->config_dir   = $currentdDirFromScriptFile.
                '/tpl/configs/';
        $smarty->cache_dir    = $currentdDirFromScriptFile.
                '/tpl/cache/';
        if(!empty($css))
        {
            for($i = 0; $i < count($css); $i++)
            {
                    $css[$i] = str_repeat(
                            '..\\', $countSlashSymbols).
                            'css\\'.$css[$i].'.css';
            }
            $smarty->assign('css', $css);
        }

        if(!empty($js))
        {
            for($i = 0; $i < count($js); $i++)
            {
                    $js[$i] = str_repeat('..\\', 
                            $countSlashSymbols).
                            'javascript\\'.$js[$i].'.js';
            }
            $smarty->assign('js', $js);
        }

        //TODO
        $smarty->caching = false;

        return $smarty;
    }
?>