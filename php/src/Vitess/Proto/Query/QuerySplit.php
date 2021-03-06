<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto

namespace Vitess\Proto\Query {

  class QuerySplit extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Query\BoundQuery */
    public $query = null;
    
    /**  @var int */
    public $row_count = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.QuerySplit');

      // OPTIONAL MESSAGE query = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "query";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\BoundQuery';
      $descriptor->addField($f);

      // OPTIONAL INT64 row_count = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <query> has a value
     *
     * @return boolean
     */
    public function hasQuery(){
      return $this->_has(1);
    }
    
    /**
     * Clear <query> value
     *
     * @return \Vitess\Proto\Query\QuerySplit
     */
    public function clearQuery(){
      return $this->_clear(1);
    }
    
    /**
     * Get <query> value
     *
     * @return \Vitess\Proto\Query\BoundQuery
     */
    public function getQuery(){
      return $this->_get(1);
    }
    
    /**
     * Set <query> value
     *
     * @param \Vitess\Proto\Query\BoundQuery $value
     * @return \Vitess\Proto\Query\QuerySplit
     */
    public function setQuery(\Vitess\Proto\Query\BoundQuery $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(2);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \Vitess\Proto\Query\QuerySplit
     */
    public function clearRowCount(){
      return $this->_clear(2);
    }
    
    /**
     * Get <row_count> value
     *
     * @return int
     */
    public function getRowCount(){
      return $this->_get(2);
    }
    
    /**
     * Set <row_count> value
     *
     * @param int $value
     * @return \Vitess\Proto\Query\QuerySplit
     */
    public function setRowCount( $value){
      return $this->_set(2, $value);
    }
  }
}

