<?php

class Action {

    public int $id = -1;
    public string $type;
    public PostType $post_type;
    public SaveImage $save_image;

    public function __construct(string $_type, PostType $_post_type, SaveImage $_save_image)
    {
        $this->type = $_type;
        $this->post_type = $_post_type;
        $this->save_image = $_save_image;
    }
}
