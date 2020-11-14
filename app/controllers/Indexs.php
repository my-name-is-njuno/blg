<?php



/**
 * Home controller
 */
class Indexs extends MainController
{

    private $user;
    private $role;
    private $post;
    private $category;

    public function __construct()
    {
        $this->user =$this->model('User');
        $this->role =$this->model('Role');
        $this->category =$this->model('Category');
        $this->post =$this->model('Post');

        // first time, create admin user
        $user = $this->user->getAll();
        if($user['count'] == 0) {
            $data_to_store_user = [
                // 'id' => 1,
                'user_name' => "Petero",
                'user_email' => "pmnjuno@gmail.com",
                'user_password' => password_hash('password', PASSWORD_DEFAULT),
                'user_role_id' => 1
            ];

            $this->user->add($data_to_store_user);
        }
        // create admin role
        $roles = $this->role->getAll();
        if($roles['count'] == 0) {
            $data_to_store_admin = [
                'role_name' => "Admin",
                'role_by' => 1
            ];
            $this->role->add($data_to_store_admin);

            $data_to_store_cashier = [
                'role_name' => "Writer",
                'role_by' => 1
            ];
            $this->role->add($data_to_store_cashier);

        }

    }




    public function home($page=1)
    {
        $data = [];
        if(!$page) {$page = 1;}
        $dt = $this->post->getAllPaginated(10, $page);
        if($dt) {
            $total_pages = $dt[0];
            $posts_data = $dt[1];
            $total_results = $dt[2];
        } else {
            $total_pages = 0;
            $posts_data = [];
            $total_results = 0;
        }

        // get all posts
        $data['posts'] = $posts_data;
        $data['total_results'] = $total_results;
        $data['total_pages'] = $total_pages;

    	$this->view('home', $data);
    }







    public function about()
    {
        $data = [];
    	$this->view('about', $data);
    }










    public function show($slug)
    {
        $data = [];
        $blog = $this->post->get_post_for_show($slug);
        if($blog['count']) {
            $data['blog'] = $blog['data'];
            $this->view('show', $data);
        } else {
            $data['error'] = "Post queried for does not exist";
            $this->view('errors/404', $data);
            return;
        }
    }










}
