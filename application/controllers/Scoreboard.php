<?php

declare(strict_types=1);

defined('BASEPATH') OR exit('No direct script access allowed');

class Scoreboard extends CI_Controller
{
    const MODEL_PERSON_MODEL = 'person_model';
    const VIEW_SCOREBOARD = 'scoreboard';

    var $personModel = self::MODEL_PERSON_MODEL;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(self::MODEL_PERSON_MODEL);
    }

    public function index()
    {
        $data['persons'] = $this->person_model->getAllPersons();

        $partials = array('myContent' => self::VIEW_SCOREBOARD);
        $this->template->load('main_master', $partials, $data);
    }

    public function ajaxGetScore()
    {
        $personId = (int)$this->input->post('personId');

        $currentSore = $this->person_model->getScore($personId);
        $data['newScore'] = $currentSore + 10;
        $this->person_model->updateScore($personId, $data['newScore']);

        $this->load->view('ajax_score', $data);
    }
}
