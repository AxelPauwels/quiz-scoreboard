<?php

class Person_entity
{
    /**
     * @var $id int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $lastname;
    /**
     * @var string
     */
    private $nickname;
    /**
     * @var string
     */
    private $image;
    /**
     * @var int
     */
    private $score;

    /**
     * Person_entity constructor.
     * @param int $id
     * @param string $name
     * @param string $lastname
     * @param string $nickname
     * @param string $image
     * @param int $score
     */

    function __construct(
        int $id,
        string $name,
        string $lastname,
        string $nickname,
        string $image,
        int $score
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
        $this->image = $image;
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore(int $score)
    {
        $this->score = $score;
    }
}
