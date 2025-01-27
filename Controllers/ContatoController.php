<?php
  namespace Controllers;
  class ContatoController extends Controller {

    public function __construct() {
    }
    
    public function executar() {
      if (isset($_POST['acao'])) {
        \Models\ContatoModel::enviarFormulario();
        echo '<script>location.href="'.INCLUDE_PATH.'/contato/sucesso"</script>'
      }
      \Router::rota('contato/sucesso', function() {
        $this->view = new \Views\MainView('contato-sucesso');
        $this->view->render(array(
          'titulo'=>'Contato'
        ));
      })

      \Router::rota('contato', function() {
        $this->view = new \Views\MainView('contato');
        $this->view->render(array(
          'titulo'=>'Contato'
        ));
      })
    }
  }

?>