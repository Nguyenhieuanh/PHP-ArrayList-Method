<?php


class MyList
{
    public $objectElement;

    public function __construct($element = "")
    {
        if (is_array($element == true)) {
            $this->objectElement = $element;
        } else {
            $this->objectElement = [];
        }
    }

    public function addAtIndex($index, $element)
    {
        array_splice($this->objectElement, $index, 0, $element);
        return $this->objectElement;
    }

    public function removeByIndex($index)
    {
        if (array_key_exists($index, $this->objectElement)) {
            array_splice($this->objectElement, $index, 1);
        }
        return $this->objectElement;
    }

    public function size()
    {
        return count($this->objectElement);
    }

    public function __clone()
    {
        return $this->objectElement;
    }

    public function isContains($element)
    {
        foreach ($this->objectElement as $value) {
            if ($value === $element) {
                return true;
            }
        }
        return false;
    }

    public function indexOf($element)
    {
        if ($this->isContains($element)) {
            return array_search($element, $this->objectElement,FALSE);
        }
        return -1;
    }

    public function addEnd($element)
    {
        array_push($this->objectElement, $element);
        return $this->objectElement;
    }

    public function isInteger($number)
    {
        return preg_match("/^[0-9]+$/", $number);
    }

    public function getIndex($index)
    {
        if ($this->isInteger($index) && $index <= $this->size() && $index >= 0) {
            return $this->objectElement[$index];
        } else {
            die('ERROR index is out of range');
        }
    }

    public function booleanAdd($element)
    {
        if ($element == null || $this->isContains($element)) {
            return false;
        }
        $this->addEnd($element);
        return true;
    }

    public function clear()
    {
        $this->objectElement = [];
    }
}
