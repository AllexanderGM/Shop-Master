<?php

require_once(__DIR__ . "/IOffice.php");
require_once(__DIR__ . "/Office.dao.php");

class Office implements IOffice
{
    protected static object $daoInstance;

    private int $id;
    private string $image;
    private string $name;
    private string $description;
    private float $price;
    private int $stock;
    private int $brandId;
    private DateTime $creationDate;
    private DateTime $updateDate;

    public function __construct(PDO $connection)
    {
        self::$daoInstance = new OfficeDao('Offices', $connection);
    }

    public function getOffices(): ?array
    {
        return self::$daoInstance->getOffices();
    }

    public function getOffice(int $id): ?array
    {
        return self::$daoInstance->getOffice($id);
    }

    public function createOffice(array $Office): ?array
    {
        return self::$daoInstance->createOffice($Office);
    }

    public function updateOffice(int $id, array $Office): ?array
    {
        return self::$daoInstance->updateOffice($Office);
    }

    public function deleteOffice(int $id): ?bool
    {
        return self::$daoInstance->deleteOffice($id);
    }

    private function setAttributes(array $arrayUser)
    {
        $this->id = $arrayUser['id'] ?? -1;
        $this->image = $arrayUser['name'] ?? '';
        $this->name = $arrayUser['last_name'] ?? '';
        $this->description = $arrayUser['document'] ?? '';
        $this->price = $arrayUser['country_phone'] ?? '';
        $this->stock = $arrayUser['phone'] ?? '';
        $this->brandId = $arrayUser['password'] ?? '';
        $this->creationDate = $arrayUser['role_id'] ?? -1;
        $this->updateDate = $arrayUser['companie_id'] ?? -1;
    }

    /* [ Getters and Setters ] */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    public function setBrandId(int $brandId): void
    {
        $this->brandId = $brandId;
    }

    public function getCreationDate(): ?DateTime
    {
        return $this->creationDate;
    }

    public function setCreationDate(string $creationDate): void
    {
        $this->creationDate = new DateTime($creationDate);
    }

    public function getUpdateDate(): ?DateTime
    {
        return $this->updateDate;
    }

    public function setUpdateDate(string $updateDate): void
    {
        $this->updateDate = new DateTime($updateDate);
    }
}
