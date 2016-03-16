<?php
namespace application;
interface Entity{
    public function getData_json();
    public function persist();
    public function getID();
}
?>