<?php

return [
    'name'        => 'Sendgrid Inbound Parse Webhook Integration',
    'description' => 'Handles the incoming email data from SendGrid',
    'version'     => '1.0',
    'author'      => 'Ilona',
    'routes' => [
        'public' => [
            'mautic_plugin_sendgrid_inbound_parse' => [
                'path'       => '/sendgrid/parse/webhook',
                'controller' => 'MauticSendgridInboundBundle:SendgridInbound:parseWebhook',
                'method'     => 'POST'
            ],
        ],
    ],
    'services' => [
        'integrations' => [
            'mautic.integration.sendgridinbound' => [
                'class'     => \MauticPlugin\MauticSendgridInboundBundle\Integration\SendgridInboundIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'monolog.logger.mautic',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
        'controllers' => [
            'mautic.sendgridinbound.controller.sendgridinbound' => [
                'class'     => \MauticPlugin\MauticSendgridInboundBundle\Controller\SendgridInboundController::class,

            ],
        ],
    ],
];