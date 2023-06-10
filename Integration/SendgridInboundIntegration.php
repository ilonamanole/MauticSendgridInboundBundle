<?php

/*
 * @copyright   2019 MTCExtendee. All rights reserved
 * @author      MTCExtendee
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticSendgridInboundBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

/**
 * Class SendgridInboundIntegration.
 */
class SendgridInboundIntegration extends AbstractIntegration
{
    const INTEGRATION_NAME = 'SendgridInbound';

    public function getName()
    {
        return self::INTEGRATION_NAME;
    }

    public function getDisplayName()
    {
        return 'Sendgrid Inbound Parse Webhook';
    }

    public function getAuthenticationType()
    {
        return 'none';
    }

    public function getRequiredKeyFields()
    {
        return [
        ];
    }

    public function getIcon()
    {
        return 'plugins/MauticSendgridInboundBundle/Assets/img/icon.png';
    }
}
