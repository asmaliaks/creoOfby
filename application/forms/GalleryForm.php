<?php
class Form_GalleryForm extends Zend_Form{
    
        public function __construct($option = null) {
        parent::__construct($option);
        
        $this->setName('gallery');
        
        $title = new Zend_Form_Element_Text('title');
        $title->setLabel('Название')
              ->setRequired()
              ->addErrorMessage('Поле обязательно для заполнения');
        
        $image = new Zend_Form_Element_File('image');
        $image->setLabel('Загрузить изображение')
              ->setDestination('/home/creoofby/public_html/public/desktop/images/filter-portfolio/');
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Сохранить')
               ->setAttrib('class', 'button2');
        
        $this->addElements(array($title, $image, $submit));
        $this->setMethod('post');

        }
}