<?php
/**
 * Author: Jaroslav Klimčík
 * Date: 8.6.14
 * Website: http://jerryklimcik.cz
 */

class PostsRepository extends Repository {

    public function fetchAll() {
        return $this->connection->table('posts')
            ->order('date DESC');
    }

    public function fetchSingle($id) {
        return $this->connection->table('posts')
            ->where('id = ?', $id)
            ->fetch();
    }
}