<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function list(): Response
    {
        $home = [
            'name' => 'Garage AutoMoto',
            'description' => 'Garage spécialisé dans la vente et mécanique auto et moto'
        ];
        return $this->render('accueil.html.twig', [
                'home'=>$home
        ]);
    }
}
?>