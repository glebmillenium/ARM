<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<!--Функция для создания навигационного меню-->
{function name=menu level=0}
    {foreach $data as $entry}
        {if is_array($entry)}
            <li class="Node IsRoot ExpandClosed">
                <div class="Expand"></div>
                <div class="Content"><input type="checkbox">{$entry@key}</div>
                <ul class="Container">
                    {call name=menu data=$entry level=$level+1}
                </ul>
            </li>
        {else}
            <li class="Node ExpandLeaf IsLast">
                <div class="Expand"></div>
                <div class="Content"><input type="checkbox">Item 1.2</div>
            </li>
        {/if}
    {/foreach}
{/function}
<html>
    <head>
        <meta charset="utf-8">
        <title>Информационный портал ЕЭИСЦ</title>

        {if isset($css)}
            {foreach from=$css item=foo}
                <link rel="stylesheet" href="{$foo}">
            {/foreach}
        {/if}

        {if isset($js)}
            {foreach from=$js item=foo}
                <script type="text/javascript" src="{$foo}"></script>
            {/foreach}
        {/if}
    </head>
    <body>
        <p align = "center">Информационный портал ЕЭИСЦ</p>
        <br/>
        <div onclick="tree_toggle(arguments[0])">
            <div class = "special left_block">
                <div>Root</div>
                <ul class="Container">
                    {call name=menu data=$ierarchicalTreeFromCatalog}
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
