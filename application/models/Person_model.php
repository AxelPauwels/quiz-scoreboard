<?php

require_once(ENTITIES_DIR . "Person_entity.php");

class Person_model extends CI_Model
{
    const DB_TABLE_SCOREBOARD = 'scoreboard_person';

    function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array (with Person objects)
     */
    function getAllPersons(): array
    {
        $this->db->order_by('name');
        $query = $this->db->get(self::DB_TABLE_SCOREBOARD);
        $results = $query->result();

        $persons = [];
        foreach ($results as $result) {
            $persons[] = $this->getPersonObject($result);
        }
        return $persons;
    }

    /**
     * @param int $personId
     *
     * @return int
     */
    function getScore($personId): int
    {
        $this->db->select('score');
        $this->db->where('id', $personId);
        $query = $this->db->get(self::DB_TABLE_SCOREBOARD);
        $currentScore = $query->row()->score;
        return $currentScore;
    }

    /**
     * @param int $personId
     * @param int $newscore
     */
    function updateScore($personId, $newscore)
    {
        $this->db->where('id', $personId);
        $this->db->set('score', $newscore);
        $this->db->update(self::DB_TABLE_SCOREBOARD);
    }

    /**
     * Creates and returns a 'PersonEntity' object
     *
     * @param $item
     * @return Person_entity
     */
    function getPersonObject($item)
    {
        $person = new Person_entity(
            $item->id,
            $item->name,
            $item->lastname,
            $item->nickname,
            $item->image,
            $item->score
        );
        return $person;
    }
}
