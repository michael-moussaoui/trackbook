<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\RendererInterface;
use BaconQrCode\Writer;

class QrcodeController extends AbstractController
{
    #[Route('/qrcode', name: 'app_qrcode')]
    public function index(): Response
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new \BaconQrCode\Renderer\Image\SvgImageBackEnd()
        );
        
        $writer = new Writer($renderer);
        $user = new User();
        $user->getUuid();
        $qrCode = $writer->writeString($uuid->toString());

        return new Response($qrCode, 200, ['Content-Type' => 'image/svg+xml']);
        // return $this->render('qrcode/index.html.twig', [
        //     'controller_name' => 'QrcodeController',
        // ]);
    }
}
