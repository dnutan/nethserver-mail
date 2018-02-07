<?php

/* @var $view Nethgui\Renderer\Xhtml */
$view->requireFlag($view::INSET_DIALOG | $view::INSET_FORM);
echo $view->header('messageCount')->setAttribute('template', $T('DeleteAll_Header'));
echo $view->textLabel('messageCount')->setAttribute('template', $T('DeleteAll_Message'));
echo $view->buttonList()
    ->insert($view->button('DeleteAll', $view::BUTTON_SUBMIT))
    ->insert($view->button('Cancel', $view::BUTTON_CANCEL))
;