<?php
namespace App\Service;

use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Item;
use Doctrine\ORM\Query;

class ItemService
{
    private $em;
    private $repository;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository(Item::class);
    }

    public function create(array $itemData): object{
        $item = new Item();
        $this->saveItem($item, $itemData);
        return $item;
    }

    public function update(int $id, array $itemData): object{
        $item = $this->findOne($id);
        $this->saveItem($item, $itemData);
        return $item;
    }

    private function saveItem(object $item, array $itemData): Item{

        $this->validate($itemData);
            $item->setName($itemData['name']);
            $item->setQuantity($itemData['quantity']);
            $this->em->persist($item);
            $this->em->flush();
            return $item;
    }

    public function deleteItem(int $id){
        $item = $this->repository->find($id);
        $this->em->remove($item);
        $this->em->flush();
    }


    public function findAll(): array{
        $query = $this->repository->createQueryBuilder('i')
            ->getQuery();
        return $query->getResult(Query::HYDRATE_ARRAY);
    }

    public function findOne(int $id): object{
        $item = $this->repository->find($id);
        if(!$item){
            throw new \ErrorException('Item not found');
        }
        return $this->repository->find($id);
    }

    private function validate(array $itemData){
        if(!preg_match("/^([a-zA-Z' ]+)$/", $itemData['name'])){
            throw new \ErrorException('Invalid Name');
        }

        if(!is_numeric($itemData['quantity'])){
            throw new \ErrorException('Invalid Quantity');
        }
    }
}
