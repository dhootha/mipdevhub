<?php

class BASE_CTRL_Console extends OW_ActionController
{
    public function listRsp()
    {
        $request = json_decode($_POST['request'], true);

        $event = new BASE_CLASS_ConsoleListEvent('console.load_list', $request, $request['data']);
        OW::getEventManager()->trigger($event);

        $responce = array();
        $responce['items'] = $event->getList();

        $responce['data'] = $event->getData();
        $responce['markup'] = array();

        /* @var $document OW_AjaxDocument */
        $document = OW::getDocument();

        $onloadScript = $document->getOnloadScript();
        if ( !empty($onloadScript) )
        {
            $responce['markup']['onloadScript'] = $onloadScript;
        }

        $styleDeclarations = $document->getStyleDeclarations();
        if ( !empty($styleDeclarations) )
        {
            $responce['markup']['styleDeclarations'] = $styleDeclarations;
        }

        echo json_encode($responce);

        exit;
    }
}