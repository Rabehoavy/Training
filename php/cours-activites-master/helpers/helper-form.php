<?php
/**
 * Helper Form
 * Permet de générer simplement un formulaire
 */
    class Form{
        private $data;  // Contient les données à insérer dans le formulaire
        private $errors;

        function set($data)
        {
            $this->data = $data;
        }
        /**
         * Permet d'initialiser des erreurs
         */
        function setErrors($errors)
        {
            $this->errors = $errors;
        }

        /**
         * Affiche une erreur
         */
        function getErrors($field)
        {
            if (isset($this->errors[$field])) {
                return '<span class="error">'.$this->errors[$field].'</span>';
            }
        }

        /**
         * Crée un input de type texte
         * @ param string $field Nom du champ en base de donnée
         * @ param string $label Nom du label (optionnel)
         * @ param array $attributs Attributs supplémentaire au input
         * @ return string
         */
        function input($field, $label=null, $attributs = array()){
            if($label == null){ $label = ucfirst($field).' :'; }
            $r = '<label class="desc" for="form'.$field.'">'.$label.'</label>';
            $value = (isset($this->data[$field])) ? $this->data[$field] : '';
            $attr = '';
            foreach($attributs as $k=>$v){
                $attr .= ' '.$k.'="'.$v.'"';
            }
            $r .= '<input type="text" name="data['.$field.']" id="form'.$field.'" value="'.$value.'" class="field text medium"'.$attr.'/>';
            $r .= $this->getErrors($field);
            return $r;
        }
    }
    ?>