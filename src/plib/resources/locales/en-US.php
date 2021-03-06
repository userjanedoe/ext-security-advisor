<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
$messages = [
    'pageTitle' => 'Security Advisor',
    'tabs.domains' => 'Domains',
    'tabs.wordpress' => 'WordPress',
    'tabs.system' => 'System',
    'list.domains.domainNameColumn' => 'Domain',
    'list.domains.statusColumn' => 'S',
    'list.domains.statusInsecure' => 'Not secure',
    'list.domains.statusInvalid' => 'The certificate is either self-signed or not valid',
    'list.domains.statusLetsencrypt' => 'Secure with a Let\'s Encrypt certificate',
    'list.domains.statusOk' => 'Secure with an SSL/TLS certificate',
    'list.domains.validFromColumn' => 'Valid From',
    'list.domains.validToColumn' => 'Valid To',
    'list.domains.sanColumn' => 'Alternative Names',
    'list.domains.letsencryptDomains' => 'Secure with Let\'s Encrypt',
    'list.domains.letsencryptDomainsDescription' => 'Install SSL/TLS certificates for the selected domains.',
    'list.domains.installLetsencrypt' => 'Install Let\'s Encrypt',
    'list.domains.installLetsencryptDescription' => 'The Let\'s Encrypt extension is required for SSL/TLS certificates creation.',
    'list.wordpress.nameColumn' => 'Name',
    'list.wordpress.urlColumn' => 'URL',
    'list.wordpress.httpsColumn' => 'HTTPS',
    'list.wordpress.httpsEnableTitle' => 'Secure',
    'list.wordpress.httpsDisableTitle' => 'Insecure',
    'list.wordpress.switchToHttpsButtonTitle' => 'Switch to HTTPS',
    'list.wordpress.switchToHttpsButtonDesc' => '',
    'list.wordpress.notAllowed' => 'WordPress Toolkit is not allowed by the license key.',
    'list.wordpress.notInstalled' => 'The WordPress Toolkit extension is not installed.',
    'list.wordpress.installWpToolkit' => 'Install WordPress Toolkit',
    'list.wordpress.installWpToolkitDescription' => 'The WordPress Toolkit extension is required for WordPress instances management.',
    'form.settings.securePaneldesc' => 'Replacing the self-signed SSL/TLS certificate with a free certificate from Let\'s Encrypt secures connections to Plesk and removes the "Untrusted Site" warning.',
    'form.settings.securePanelHostnametitle' => 'Hostname',
    'form.settings.http2title' => 'HTTP/2',
    'form.settings.http2desc' => 'Enabling HTTP/2 will give a significant speed boost to all SSL/TLS-secured websites on the server.',
    'controllers.letsencrypt.successMsg' => 'Let\'s Encrypt SSL certificate was successfully installed on %%domains%%.',
    'controllers.letsencrypt.inProgressMsg' => 'Let\'s Encrypt is currently working: %%progress%%% complete.',
    'controllers.securePanel.pageTitle' => 'Secure Plesk',
    'controllers.securePanel.save.successMsg' => 'The settings were successfully applied',
    'controllers.switchWordpressToHttps.successMsg' => 'All selected WordPress instances were switched to HTTPS',
    'controllers.switchWordpressToHttps.errorMsg' => 'There were issues with switching WordPress instances to HTTPS: ',
    'promo.title' => 'Security Advisor',
    'promo.textDomains' => 'Your next step is: Secure your domains (%%count%% domains are not secure)',
    'promo.textWordpress' => 'Your next step is: Secure your WordPress installations (%%count%% installations are not secure).',
    'promo.textHttp2' => 'Your next step is: Enable HTTP/2 for all domains.',
    'promo.textPanel' => 'Your next step is: Secure Plesk with an SSL certificate.',
    'promo.textDatagrid' => 'Your next step is: Keep your system up-to-date with Datagrid reliability and vulnerability scanner.',
    'promo.textPatchman' => 'Your next step is: Keep applications up-to-date and secure them with Patchman.',
    'promo.textGoogleauthenticator' => 'Your next step is: Activate 2 Factor Authentication (2FA) with Google Authenticator.',
    'promo.textDone' => 'Plesk has been secured!',
    'promo.buttonSecure' => 'Secure it!',
    'promo.buttonDone' => 'Check it out',
    'controllers.system.panelSecured' => 'Plesk is secured with a valid SSL/TLS certificate',
    'controllers.system.panelNotSecured' => 'Plesk is not secured with a valid SSL/TLS certificate',
    'controllers.system.secureDesc' => 'Secure Plesk with Let\'s Encrypt',
    'controllers.system.letsencryptDesc' => 'Let\'s Encrypt is a certificate authority (CA) that allows you to create free SSL/TLS certificates for your domains.',
    'controllers.system.letsencryptInstall' => 'Install Let\'s Encrypt and secure Panel with free SSL certificate',
    'controllers.system.http2Desc' => 'HTTP/2 improves performance; specifically, end-user perceived latency, network and server resource usage.',
    'controllers.system.http2Enabled' => 'HTTP/2 is enabled',
    'controllers.system.http2Button' => 'Enable HTTP/2',
    'controllers.system.nginxDesc' => 'Enable nginx so that HTTP/2 can be turned on. HTTP/2 improves performance; specifically, end-user perceived latency, network and server resource usage.',
    'controllers.system.nginxButton' => 'Enable nginx reverse proxy and HTTP/2',
    'controllers.system.aiDesc' => 'Install nginx to make HTTP/2 available. To install nginx, select nginx web server in the Web hosting group in Plesk Installer. HTTP/2 improves performance; specifically, end-user perceived latency, network and server resource usage.',
    'controllers.system.aiButton' => 'Install nginx web server and enable HTTP/2',
    'controllers.system.datagridDesc' => 'The Datagrid scanner analyzes your server configuration and compares it to real world results from servers around the world to report reliability and security vulnerabilities.  On top of that, it\'s free.',
    'controllers.system.datagrid' => 'Datagrid reliability and vulnerability scanner',
    'controllers.system.datagridActivate' => 'Activate the Datagrid reliability and vulnerability scanner',
    'controllers.system.datagridInstall' => 'Install the Datagrid reliability and vulnerability scanner',
    'controllers.system.patchmanDesc' => 'Patchman automatically and safely patches vulnerabilities in CMSs like WordPress, Joomla, and Drupal. On top of that, it cleans up malware.',
    'controllers.system.patchman' => 'Patchman',
    'controllers.system.patchmanActivate' => 'Activate Patchman',
    'controllers.system.patchmanInstall' => 'Install Patchman',
    'controllers.system.googleauthenticatorDesc' => 'Google Authenticator adds a 2 Factor Authentication (2FA) to the login of your Plesk instance.',
    'controllers.system.googleauthenticator' => 'Google Authenticator',
    'controllers.system.googleauthenticatorActivate' => 'Activate Google Authenticator',
    'controllers.system.googleauthenticatorInstall' => 'Install Google Authenticator',
    'controllers.system.stateEnabled' => 'Enabled',
    'controllers.system.stateDisabled' => 'Disabled',
    'controllers.system.stateRunning' => 'Running',
    'controllers.system.stateNotActivated' => 'Not Activated',
    'controllers.system.stateNotInstalled' => 'Not Installed',
    'controllers.system.busy' => 'Please wait...',
];
