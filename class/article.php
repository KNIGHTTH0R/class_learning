<?php
class Text 
{
  // Private property inside the class
    public $title;
    public $slug;
    public $content;
 
  //Public setter method
    public function setTitle($title)
    {
        $this -> title = $title;
    }
    public function setSlug($slug)
    {
        $this -> slug = $slug;
    }
    public function setContent($content)
    {
        $this -> content = $content;
    }
    
}
 
 
//The child class inherits the code from the parent class
class Article extends Text 
{
    public $desc;
    public $image;
    
    public function setDesc($desc)
    {
        $this -> desc = $desc;
    }
    
    public function setImage($image)
    {
        $this -> image = $image;
    }
    
    public function readArticle()
    {
        return "Class Article: <br/>This is ". $this -> title ."<br/>And Slug URL ". $this -> slug ."<br/>Please read the description ". $this -> desc ."<br/>And more information, read this ". $this -> content ."<br/>Image for this article ". $this -> image;
    }
}
class Images extends Article
{
    public function imageGallery()
    {
        return "Class Images: <br/>This is Title: ". $this -> title . "<br/>This Slug URL ". $this -> slug ."<br/>This short desc ". $this -> desc . "<br/>And this is Image Link ". $this -> image;
    }
}
?>
