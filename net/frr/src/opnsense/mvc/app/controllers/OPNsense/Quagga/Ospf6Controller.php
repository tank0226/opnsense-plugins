<?php

/*
    Copyright (C) 2017 Fabian Franz
    Copyright (C) 2017 Michael Muenz <m.muenz@gmail.com>
    All rights reserved.
    Redistribution and use in source and binary forms, with or without
    modification, are permitted provided that the following conditions are met:
    1. Redistributions of source code must retain the above copyright notice,
       this list of conditions and the following disclaimer.
    2. Redistributions in binary form must reproduce the above copyright
       notice, this list of conditions and the following disclaimer in the
       documentation and/or other materials provided with the distribution.
    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
    POSSIBILITY OF SUCH DAMAGE.
*/

namespace OPNsense\Quagga;

class Ospf6Controller extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        $this->view->ospf6Form = $this->getForm("ospf6");

        $this->view->formDialogEditNetwork = $this->getForm("dialogEditOSPF6Network");
        $this->view->formGridEditNetwork = $this->getFormGrid("dialogEditOSPF6Network");

        $this->view->formDialogEditInterface = $this->getForm("dialogEditOSPF6Interface");
        $this->view->formGridEditInterface = $this->getFormGrid("dialogEditOSPF6Interface");

        $this->view->formDialogEditPrefixLists = $this->getForm("dialogEditOSPF6PrefixLists");
        $this->view->formGridEditPrefixLists = $this->getFormGrid("dialogEditOSPF6PrefixLists");

        $this->view->formDialogEditRouteMaps = $this->getForm("dialogEditOSPF6RouteMaps");
        $this->view->formGridEditRouteMaps = $this->getFormGrid("dialogEditOSPF6RouteMaps");

        $this->view->formDialogEditRedistribution = $this->getForm("dialogEditRedistribution");
        $this->view->formGridEditRedistribution = $this->getFormGrid("dialogEditRedistribution");

        $this->view->pick('OPNsense/Quagga/ospf6');
    }
}
