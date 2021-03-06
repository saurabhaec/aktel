<?php
class Form_Decorator_DeButton extends Aktel_Form_Decorator_Abstract
{
	protected $_format = '<div><input class="loginbtn" id="%s" name="%s" type="submit" value="%s"/></div>';
   public function render($content)
	{
		$element = $this->getElement();
		$name = htmlentities($element->getFullyQualifiedName());
		$label = htmlentities($element->getLabel());
		$id = htmlentities($element->getId());
		$value = htmlentities($element->getValue());
		$markup = sprintf($this->_format,$id, $name, $value);
		return $markup;
	}


}