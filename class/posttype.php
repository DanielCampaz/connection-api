<?php
require_once __DIR__ . '\post_configuration\common.php';
require_once __DIR__ . '\post_configuration\postarray.php';
require_once __DIR__ . '\post_configuration\postsingle.php';
require_once __DIR__ . '\post_configuration\poststatus.php';

class PostType {

    public int $id = -1;
    public bool $comment_status;
    public PostArray $post_author;
    public PostArray $post_name;
    public PostArray $post_title;
    public PostArray $post_content;
    public PostArray $post_category;
    public PostSingle $post_type;
    public PostStatus $post_status;
    public PostSingle $featured_image;
    public PostSingle $next;
    public bool $is_next;

    public function __construct(bool $_comment_status, PostArray $_post_author, PostArray $_post_name, PostArray $_post_title, PostArray $_post_content, PostArray $_post_category, PostSingle $_post_type, PostStatus $_post_status, PostSingle $_featured_image, PostSingle $_next, bool $_is_next)
    {
        $this->comment_status = $_comment_status;
        $this->post_author = $_post_author;
        $this->post_name = $_post_name;
        $this->post_title = $_post_title;
        $this->post_content = $_post_content;
        $this->post_category = $_post_category;
        $this->post_type = $_post_type;
        $this->post_status = $_post_status;
        $this->featured_image = $_featured_image;
        $this->next = $_next;
        $this->is_next = $_is_next;
    }
}