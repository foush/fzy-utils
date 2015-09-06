<?php
namespace FzyUtils;

abstract class AbstractOutput implements \JsonSerializable {
    public function __toString()
    {
        return json_encode($this);
    }
}