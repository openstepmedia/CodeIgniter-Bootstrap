<?php
if (!defined('BASEPATH')) die();
/**
 * Controller to illustrate how to use the Doctrine ODM MongoDB connection
 * in Codeigniter
 */
class Movies extends Main_Controller {

    public $data = array();
    private $dm; 
    
    /**
     * See /application/libraries/DoctrineODM.php 
     */
    public function __construct() {
        parent::__construct();
        
        $this->load->library('DoctrineODM');
        $this->dm = $this->doctrineodm->dm;
    }
    
    /**
     * Pull entire collection from MongoDB
     */
    public function index() {
        $this->load->library('session');

        //get all movies:
        $this->data['movies'] = $this->dm->getRepository('Documents\Movie')->findAll();
        
        $this->load->view('include/header');
        $this->load->view('movies/movies_index', $this->data);
        $this->load->view('include/footer');
    }

    /**
     * Create new Object
     */
    public function create() {
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title', 'Title', 'required');

        if ($this->form_validation->run())
	{
            //instantiate MongoDB / DoctrineODM Object
            $movie = new \Documents\Movie();
            $movie->title = $this->input->post('title');
            $movie->director = $this->input->post('director');
            $movie->year = $this->input->post('year');
            
            $this->dm->persist($movie);
            $this->dm->flush();
            
            //flash
            $this->load->library('session');
            $this->session->set_flashdata('message', 'Movie info saved.');
            
            //redirect
            redirect('/movies');
	}
        
        $this->load->view('include/header');
        $this->load->view('movies/movies_create', $this->data);
        $this->load->view('include/footer');
    }

    public function update($id) {
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        
        //find the row in MongoDB with the given $id
        $this->data['movie'] = $movie = $this->dm->find('Documents\Movie', $id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        
        if ($this->form_validation->run())
	{
            //Override the Doctrine object members
            $movie->title = $this->input->post('title');
            $movie->director = $this->input->post('director');
            $movie->year = $this->input->post('year');
            
            $this->dm->persist($movie);
            $this->dm->flush();
            
            //flash
            $this->session->set_flashdata('message', 'Movie info saved.');
            
            //redirect
            redirect('/movies/update/' . $id);
	}

        $this->load->view('include/header');
        $this->load->view('movies/movies_update', $this->data);
        $this->load->view('include/footer');
    }    
    

    public function view($id) {
        $this->data['movie'] = $this->dm->find('Documents\Movie', $id);
        
        $this->load->view('include/header');
        $this->load->view('movies/movies_view', $this->data);
        $this->load->view('include/footer');        
    }
    
    public function delete($id) {
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        
        $this->data['movie'] = $movie = $this->dm->find('Documents\Movie', $id);
        
        if ($this->input->post('do_delete'))
	{
            //DoctrineODM remove() function
            //see: http://doctrine-mongodb-odm.readthedocs.org/en/latest/reference/working-with-objects.html
            $this->dm->remove($movie);
            $this->dm->flush();
            
            //flash
            $this->session->set_flashdata('message', 'Movie deleted.');
            
            //redirect
            redirect('/movies');
	}
        
        $this->load->view('include/header');
        $this->load->view('movies/movies_delete', $this->data);
        $this->load->view('include/footer');        
    }
}

/* End of file movies.php */
/* Location: ./application/controllers/movies.php */
