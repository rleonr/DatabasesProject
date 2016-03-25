<?php
namespace application;
interface Entity{
    public function getData();
    public function persist();
    public function getID();
}
?>