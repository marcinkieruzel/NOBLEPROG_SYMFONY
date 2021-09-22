<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\Hello;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    private $hello;
    private $name;
    public function __construct(Hello $hello, string $name)
    {
        $this->hello = $hello;
        $this->name = $name;
    }

    /**
     * @Route("/blog/create", name="blog")
     */
    public function index(Request $request): Response
    {

//        dump($this->name); die();

        $manager = $this->getDoctrine()->getManager();

        $users = $this->getDoctrine()->getRepository(User::class);

        $users = $users->findAll();

        $user = new User();
        $user->setName("M");
        $user->setLastname("K");
        $user->setAge(37);

        $manager->persist($user);
        $manager->flush();

//        dump($users); die();

        return $this->render('blog/index.html.twig', [
            'hello' => $this->hello->hello(),
            'users' => $users
        ]);
    }


    /**
     * @Route("/blog/delete", name="blog_delete")
     */
    public function delete(Request $request): Response
    {
        return $this->render('blog/index.html.twig', [
            'hello' => $this->hello->hello(),
        ]);
    }
}
