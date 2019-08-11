<?php
namespace App\Controller;

use App\Service\ItemService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ItemController
 * @package App\Controller
 */
class ItemController extends AbstractController
{

    /**
     * @var ItemService
     */
    private $itemService;

    /**
     * ItemController constructor.
     * @param ItemService $itemService
     */
    public function __construct(ItemService  $itemService)
    {
        $this->itemService = $itemService;
    }

    /**
     * @Route("/item", methods={"GET"})
     */
    public function index()
    {
        return $this->render('item/index.html.twig');
    }


    /**
     * @Route("/api/item", name="item", methods={"GET"})
     */
    public function getItems()
    {
        return $this->json($this->itemService->findAll());
    }

    /**
     * @Route("/api/item", name="create", methods={"POST"})
     */
    public function create(Request $request): Response
    {
            $itemData = json_decode($request->getContent(), true);
            try{
                $item = $this->itemService->create($itemData);
                return $this->json($item->getId());
            }catch(\ErrorException $e){
                return $this->json($e->getMessage(), 400);
            }
    }

    /**
     * @Route("/api/item/{id}", name="update", methods={"POST"})
     */
    public function update($id, Request $request): Response
    {

        $itemData = json_decode($request->getContent(), true);
        try {
            $item = $this->itemService->update($id, $itemData);
            return $this->json($item->getId());
        }catch(\ErrorException $e){
            return $this->json($e->getMessage(), 400);
        }
    }

    /**
     * @Route("/api/item/{id}/delete", name="delete", methods={"POST"})
     */
    public function delete($id, Request $request): Response
    {
        try {
            $this->itemService->deleteItem($id);
            return $this->json("Deleted");
        }catch(\ErrorException $e){
            return $this->json($e->getMessage(), 400);
        }
    }
}
