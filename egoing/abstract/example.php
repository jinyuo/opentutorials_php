<?php
abstract class AbstractPageTemplate{
  protected final function template(){
    $result = '';
    $result .=$this->header();
    $result .=$this->article();
    $result .=$this->footer();

    return $result;
  }

  public function render(){
    return $this->template();
  }

  abstract protected function header();
  abstract protected function article();
  abstract protected function footer();
}

class TextPage extends AbstractPageTemplate{
  protected function header(){
    return "PHP<br/>\n";
  }

  protected function article(){
    return "PHP: Hypertext Preprocessor<br/>\n";
  }

  protected function footer(){
    return "website is php.net<br/>\n";
  }
}

class HtmlPage extends AbstractPageTemplate{
  protected function header(){
    ob_start();
    ?>
    <header>
      <h1>PHP</h1>
    </header>
    <?php
    return ob_get_clean();
  }

  protected function article(){
    ob_start();
    ?>
    <article>
      <h1>PHP: Hypertext Preprocessor</h1>
    </article>
    <?php
    return ob_get_clean();
  }

  protected function footer(){
    ob_start();
    ?>
    <footer>
      <a href="http://php.net">php.net</a>
    </footer>
    <?php
    return ob_get_clean();
  }

  public function render(){
    $result = '<html>';
    $result .= $this->template();
    return $result . '</html>';
  }
}

$html = new HtmlPage();
echo $html->render();

//$text = new TextPage();
//echo $text->render();
 ?>
