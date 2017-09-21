<?php
/* Smarty version 3.1.30, created on 2017-09-20 09:34:19
  from "C:\xampp\htdocs\ARM\tpl\templates\information_portal\information_portal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c219fbc3e723_27365266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145c7c246cb32def3cefa831ca74643000a896af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ARM\\tpl\\templates\\information_portal\\information_portal.tpl',
      1 => 1505892856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c219fbc3e723_27365266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\ARM\\tpl\\templates_c\\145c7c246cb32def3cefa831ca74643000a896af_0.file.information_portal.tpl.php',
    'uid' => '145c7c246cb32def3cefa831ca74643000a896af',
    'call_name' => 'smarty_template_function_menu_2425859c219fbbaf4f3_31910941',
  ),
));
?>
<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<!--Функция для создания навигационного меню-->

<html>
    <head>
        <meta charset="utf-8">
        <title>Информационный портал ЕЭИСЦ</title>

        <?php if (isset($_smarty_tpl->tpl_vars['css']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['js']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo '</script'; ?>
>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
    </head>
    <body>
        <p align = "center">Информационный портал ЕЭИСЦ</p>
        <br/>
        <div onclick="tree_toggle(arguments[0])">
            <div class = "special left_block">
                <div>Root</div>
                <ul class="Container">
                    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['ierarchicalTreeFromCatalog']->value), true);?>

                </ul>
            </div>
        </div>


            <div>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
                <p>DISPLAY</p><br/>
            </div>


            <div onclick="tree_toggle(arguments[0])">

                <div class = "special left_block">

                    <div>Root</div>
                    <ul class="Container">
                        <li class="Node IsRoot ExpandClosed">
                            <div class="Expand"></div>
                            <div class="Content"><input type="checkbox">Item 1</div>
                            <ul class="Container">
                                <li class="Node ExpandClosed">
                                    <div class="Expand"></div>
                                    <div class="Content"><input type="checkbox">Item 1.1</div>
                                    <ul class="Container">
                                        <li class="Node ExpandLeaf IsLast">
                                            <div class="Expand"></div>
                                            <div class="Content"><input type="checkbox">Item 1.1.2</div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="Node ExpandLeaf IsLast">
                                    <div class="Expand"></div>
                                    <div class="Content"><input type="checkbox">Item 1.2</div>
                                </li>
                            </ul>
                        </li>
                        <li class="Node IsRoot ExpandClosed">
                            <div class="Expand"></div>
                            <div class="Content"><input type="checkbox">Item 2<br/><input type="checkbox">title long yeah</div>
                            <ul class="Container">
                                <li class="Node ExpandLeaf IsLast">
                                    <div class="Expand"></div>
                                    <div class="Content"><input type="checkbox">Item 2.1</div>
                                </li>
                            </ul>
                        </li>

                        <li class="Node ExpandOpen IsRoot IsLast">
                            <div class="Expand"></div>
                            <div class="Content"><input type="checkbox">Item 3</div>
                            <ul class="Container">
                                <li class="Node ExpandLeaf IsLast">
                                    <div class="Expand"></div>
                                    <div class="Content"><input type="checkbox">Item 3.1</div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="special right_block"><p>23132423</p></div>
                </body>
                </html>
<?php }
/* smarty_template_function_menu_2425859c219fbbaf4f3_31910941 */
if (!function_exists('smarty_template_function_menu_2425859c219fbbaf4f3_31910941')) {
function smarty_template_function_menu_2425859c219fbbaf4f3_31910941($_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
            <li class="Node IsRoot ExpandClosed">
                <div class="Expand"></div>
                <div class="Content"><input type="checkbox"><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</div>
                <ul class="Container">
                    <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                </ul>
            </li>
        <?php } else { ?>
            <li class="Node ExpandLeaf IsLast">
                <div class="Expand"></div>
                <div class="Content"><input type="checkbox">Item 1.2</div>
            </li>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}}
/*/ smarty_template_function_menu_2425859c219fbbaf4f3_31910941 */
}
