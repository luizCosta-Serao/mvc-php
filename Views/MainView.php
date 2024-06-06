<?php
  namespace Views;

  class MainView {
    private $filename;
    private $header;
    private $footer;

    const titulo = 'Projeto MVC';
    public $menuItems = array('Home','Sobre','Contato');

    public function __construct($filename ,$header = 'header', $footer = 'footer') {
      $this->filename = $filename;
      $this->header = $header;
      $this->footer = $footer;
    }

    public function render($arr = []) {
      include('pages/templates/'.$this->header.'.php');
      include('pages/'.$this->filename.'.php');
      include('pages/templates/'.$this->footer.'.php');
    }
  }

?>