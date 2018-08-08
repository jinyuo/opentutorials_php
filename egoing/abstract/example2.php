<?php
abstract class AbstractPageTemplate{
  protected final function template(){
    $result = $this->header();
    $result .= $this->article();
    $result .= $this->footer();

    return $result;
  }

  protected abstract function header();
  protected abstract function article();
  protected abstract function footer();

  function render(){
    return $this->template();
  }
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
    return "<header>PHP</header>\n";
  }
  protected function article(){
    return "<article>PHP: Hypertext Preprocessor</article>\n";
  }

  protected function footer(){
    return "<footer>website is php.net</footer>\n";
  }

  function render(){
    $result = '<html>';
    $result .= $this -> template();
    return $result .= '</html>';

  }
}

$text = new TextPage();
echo $text->render();

$html = new HtmlPage();
echo $html->render();
 ?>
