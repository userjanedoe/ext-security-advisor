<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_SecurityAdvisor_Promo_Home extends pm_Promo_AdminHome
{
    private $_step;

    public function getTitle()
    {
        return $this->lmsg('promo.title');
    }

    public function getText()
    {
        return $this->lmsg('promo.text' . ucfirst($this->_getStep()), ['count' => $this->_getIssuesCount()]);
    }

    public function getButtonText()
    {
        return ('done' != $this->_getStep() ? $this->lmsg('promo.buttonSecure') : $this->lmsg('promo.buttonDone'));
    }

    public function getButtonUrl()
    {
        switch ($this->_getStep()) {
            case 'domains' :
                return pm_Context::getActionUrl('index', 'domain-list');
            case 'wordpress' :
                return pm_Context::getActionUrl('index', 'wordpress-list');
            case 'http2' :
            case 'datagrid' :
            case 'patchman' :
            case 'googleauthenticator' :
                return pm_Context::getActionUrl('index', 'system');
            case 'panel' :
                return pm_Context::getActionUrl('index', 'secure-panel');
            default :
                return pm_Context::getBaseUrl();
        }
    }

    public function getIconUrl()
    {
        return pm_Context::getBaseUrl() . '/images/home-promo.png';
    }

    private function _getStep()
    {
        if (is_null($this->_step)) {
            if (Modules_SecurityAdvisor_Letsencrypt::countInsecureDomains() > 0) {
                $this->_step = 'domains';
            } elseif (Modules_SecurityAdvisor_Helper_WordPress::get()->getNotSecureCount() > 0) {
                $this->_step = 'wordpress';
            } else if (!Modules_SecurityAdvisor_Helper_Http2::isHttp2Enabled()) {
                $this->_step = 'http2';
            } else if (!Modules_SecurityAdvisor_Helper_PanelCertificate::isPanelSecured()) {
                $this->_step = 'panel';
            } else if (!$this->_isDatagridInstalledAndActivated()) {
                $this->_step = 'datagrid';
            } else if (!$this->_isPatchmanInstalledAndActivated()) {
                $this->_step = 'patchman';
            } else if (!$this->_isGoogleAuthenticatorInstalledAndActivated()) {
                $this->_step = 'googleauthenticator';
            } else {
                $this->_step = 'done';
            }
        }
        return $this->_step;
    }

    private function _getIssuesCount()
    {
        switch ($this->_getStep()) {
            case 'domains' :
                return Modules_SecurityAdvisor_Letsencrypt::countInsecureDomains();
            case 'wordpress' :
                return Modules_SecurityAdvisor_Helper_WordPress::get()->getNotSecureCount();
            default :
                return 0;
        }
    }

    private function _isDatagridInstalledAndActivated()
    {
        return $this->_isExtensionInstalledAndActivated(new Modules_SecurityAdvisor_Datagrid());
    }

    private function _isPatchmanInstalledAndActivated()
    {
        return $this->_isExtensionInstalledAndActivated(new Modules_SecurityAdvisor_Patchman());
    }

    private function _isGoogleAuthenticatorInstalledAndActivated()
    {
        return $this->_isExtensionInstalledAndActivated(new Modules_SecurityAdvisor_GoogleAuthenticator());
    }

    private function _isExtensionInstalledAndActivated($helper)
    {
        if (!$helper->isInstalled()) {
            return false;
        }
        if (!$helper->isActive()) {
            return false;
        }
        return true;
    }
}
