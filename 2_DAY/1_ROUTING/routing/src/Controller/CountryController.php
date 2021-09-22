<?php

namespace App\Controller;

use App\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     * @Route("/country/", name="country")
     */
    public function index(): Response
    {

        $repo =  $this->getDoctrine()->getRepository(Country::class);

        $data = $repo->findBy([], [], 1,2);

        return $this->render('country/index.html.twig', [
            'data' => $data,
        ]);
    }

    /**
     * @Route("/country/add", name="add_country")
     */
    public function add(Request $request): Response
    {

        $manager = $this->getDoctrine()->getManager();

        if ($request->getMethod() === 'POST') {

            $capitol = $request->get('capitol');
            $population = $request->get("population");

            if (is_numeric($population) && is_string($capitol)) {


//                dump($population, $capitol);
//                die();

                $country = new Country();
                $country
                    ->setCapitol($capitol)
                    ->setPresident("Duda")
                    ->setPopulation(intval($population));


                $manager->persist($country);
                $manager->flush();


            }


        }

        return $this->render('country/add.html.twig', [

        ]);
    }
}
