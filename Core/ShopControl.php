<?php

namespace zunderweb\error_reporting\Core;


class ShopControl extends ShopControl_parent
{

    protected function _getErrorReportingLevel() // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $errorReporting = E_ALL;
        
        if (!$this->getConfig()->getConfigParam('blErepErrorsNotice')) {
            $errorReporting = $errorReporting ^ E_NOTICE;
        }
        if (!$this->getConfig()->getConfigParam('blErepErrorsWarning')) {
            $errorReporting = $errorReporting ^ E_WARNING;
        }
        if (!$this->getConfig()->getConfigParam('blErepErrorsDeprecated')) {
            $errorReporting = $errorReporting ^ E_DEPRECATED;
        }

        if ($this->getConfig()->isProductiveMode() && !ini_get('log_errors')) {
            $errorReporting = 0;
        }


        return $errorReporting;
    }
}