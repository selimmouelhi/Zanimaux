<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 28/03/2018
 * Time: 21:06
 */

namespace ProduitBundle\Controller;


use PidevBundle\Entity\produit;
use PidevBundle\Entity\User;
use ProduitBundle\Form\AjouterProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AjouteProduitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;


class ProduitController extends Controller
{
    public function afficherpmAction(){

        $em = $this->getDoctrine();
        $repository = $em->getRepository(produit::class);
        $produits = $repository->findAll();
        return $this->render('ProduitBundle:Front:affproduit.html.twig',array('produits'=>$produits));
    }

    public function ajouterpmAction(){


    }

    public function displaypmAction($id){

        {
            $Product = new produit();
            $em= $this->getDoctrine();
            $repo = $this->getDoctrine()->getRepository("PidevBundle:Produit");
            $repo1 = $this->getDoctrine()->getRepository("PidevBundle:USER");
            $Product= $repo->find($id);
            $user= $this->get('security.token_storage')->getToken()->getUser();
            //die($usr);


            $CurrentUser=$repo1->find($user->getId());


            return $this->render('ProduitBundle:Front:dipslaypm.html.twig'
                , array('produit'=>$Product,
                    'user'=>$CurrentUser));

        }


    }

    public function addProductAction( Request $request){

        $em=$this->getDoctrine()->getManager();
        $user= $this->get('security.token_storage')->getToken()->getUser();
        $produit=new produit();
        $produit->setIdUser($user->getId());
        $produit->setDatePost($produit->getDatePost());
        $form=$this->createForm(AjouterProduitType::class,$produit );




        $form->handleRequest($request);
        if ($form->isValid()) {

            $file=$produit->getUrl();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$filename
            );
            $produit->setUrl($filename);
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute("pidev_homepage");
        }
        return $this->render('ProduitBundle:Front:ajouterProduit.html.twig', array(
            "form" => $form->createView()
        ));

    }




}