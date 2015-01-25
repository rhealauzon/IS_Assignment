<?php

/**
 * @author Christofer Klassen
 * 
 * This is a simple mock-database representing blog posts
 * submitted to the blog page of Develop().
 */
class BlogPosts extends CI_Model {

    // Dummy data to represent a number of posts
    var $data = array(
        array('id' => '1', 'author' => 'Chris Klassen', 
            'avatar' => 'https://en.gravatar.com/userimage/17321210/5b8283d1650b1c74193e660de9570608.png',
            'title' => 'Post A', 'content' => 'This is some dummy content!', 
            'votes' => '5', 'date' => 'January 23, 2015'),
        array('id' => '2', 'author' => 'Chris Klassen', 
            'avatar' => 'https://en.gravatar.com/userimage/17321210/5b8283d1650b1c74193e660de9570608.png',
            'title' => 'Post B', 'content' => 'This is some more dummy content!', 
            'votes' => '5', 'date' => 'January 21, 2015'),
        array('id' => '2', 'author' => 'Rhea Lauzon', 
            'avatar' => 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10394662_689581134441393_490151721075499359_n.jpg?oh=1f834965123f4cee2362392cde9c8c7a&oe=55679D44&__gda__=1432925197_0456a1adf27c68263b8d57a0341c77b8',
            'title' => 'Post C', 'content' => 'First post!', 
            'votes' => '23', 'date' => 'January 20, 2015')
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // Retrieve a single blog post
    public function getPost($postNum) {
        
        // Loop through and find the blog post
        foreach ($this->data as $record)
        {
            if ($record['id'] == $postNum)
            {
                return $record;
            }
        }
        
        // If we didn't find it, return null
        return null;
    }

    // Retrieve all blog posts
    public function getAllPosts() {
        return $this->data;
    }

    // Retrieve the first blog post
    public function getFirstPost() {
        return $this->data[0];
    }
    
    // Retrieve the top n blog posts by rating
    public function getTopPosts($num) {
        // TEMP: Return the first three posts in the model
        $posts;
        
        for ($i = 0; $i < $this->data->size && $i < $num; $i++)
        {
            $posts[$i] = $this->data[$i];
        }
        
        return $posts;
    }
}