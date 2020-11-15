<?php


/**
 * post model
 */
class Post
{
    /**
     * manages crud for post
     */

    // iniatiliaze db
    private $db;
    private $table;

    public function __construct()
    {
        // connect to db
        $this->db = new MainModel();
        // associate model with $table
        $this->table = 'posts';
    }


    public function all()
    {
        return $this->db->getAll($this->table);
    }

    public function add($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $id, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, $id);
    }

    public function find($id)
    {
        return $this->db->get($this->table, $id);
    }



    public function get_post_for_show($slug)
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name,
                users.user_name, users.id as uid 
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                INNER JOIN users
                ON $this->table.post_user_id = users.id
                WHERE $this->table.post_slug = '$slug'";
        return $this->db->getOneSql($sql);
    }


    public function getSimiliar($category)
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name,
                users.user_name, users.id as uid 
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                INNER JOIN users
                ON $this->table.post_user_id = users.id
                WHERE $this->table.post_category_id = '$category'
                LIMIT 4";
        return $this->db->getManySql($sql);
    }





    public function checkIfTitleExist($name)
    {
        $exists = $this->db->getOne($this->table, 'post_title', $name);
        if($exists['count'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkIfTitleExistEdit($id, $post_name)
    {
        $sql = "SELECT * FROM $this->table WHERE id != :id AND post_title = :post_item";
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        $this->db->bind(':post_item', $post_name);
        $this->db->execute();
        if($this->db->row_count()) {
            return true;
        } else {
            return false;
        }

    }






    public function getAllPaginated($items, $page)
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                ORDER BY id DESC";

        $data = $this->db->select_with_paginantion($sql, $items, $page);

        if($data) {return $data;} else {return false;}
    }





    public function getForHome()
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                LIMIT 6";
        return $this->db->getManySql($sql);
    }






    public function getAll()
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name,
                users.user_name, users.id as uid,
                count(views.id) as views_count
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                INNER JOIN views
                ON $this->table.id = views.view_post_id
                INNER JOIN users 
                ON users.id = $this->table.post_user_id
                GROUP BY (views.view_post_id)";
        return $this->db->getManySql($sql);
    }






    public function find_with_ajax($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = '$id'";
        return $this->db->getOneSql($sql);
    }






    public function get_post_items_for_category($id)
    {
        $sql = "SELECT $this->table.* ,
                categorys.category_name
                FROM $this->table
                INNER JOIN categorys
                ON $this->table.post_category_id = categorys.id
                WHERE $this->table.post_category_id = '$id'";
        return $this->db->getManySql($sql);
    }
}
