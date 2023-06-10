<?php

namespace MauticPlugin\MauticSendgridInboundBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SendgridInboundController extends CommonController
{
    /**
     *
     * @return Response
     */
    public function parseWebhookAction(Request $request)
    {
    /*    $postData = $request->getContent();
        $decodedData = json_decode($postData, true);*/
        $emailData = json_decode(file_get_contents('php://input'), true);
        // Process the data as needed
        // Log the received data
        $this->logReceivedData($emailData);

        // Extract relevant information from the email data
        $sender = $emailData['from'];
        $recipient = $emailData['to'];
        $subject = $emailData['subject'];
        $body = $emailData['text'];

        // Perform actions based on the email data
        // Update contact records, trigger campaigns, send automated replies, etc.

        return new JsonResponse(['status' => 'success']);
    }

    private function logReceivedData(array $data)
    {
        // Example: Log the data to a file
        $logFile = __DIR__ . '/../Resources/logs/post.log';
        $logEntry = '[' . date('Y-m-d H:i:s') . '] ' . json_encode($data) . PHP_EOL;
        file_put_contents($logFile, $logEntry, FILE_APPEND);
    }
}