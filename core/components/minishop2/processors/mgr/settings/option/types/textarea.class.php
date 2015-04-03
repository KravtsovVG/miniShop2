<?php

class msTextareaType extends msOptionType implements msOptionTypeInterface {

    public function getValue($criteria) {
        /** @var msProductOption $value */
        $value = $this->xpdo->getObject('msProductOption', $criteria);
        return ($value) ? $value->get('value') : null;
    }

    public function setValue($criteria, $value) {

    }

    public function getField() {
        return "{xtype:'textarea'}";
    }
}

return 'msTextareaType';