<?php

namespace moz\EventManager;

class Emitter
{
    /**
     * @var Emitter
     */
    private static $instance;


    /**
     * @var array
     */
    protected $listeners = [];

    private function __construct()
    {

    }


    /**
     * @return static
     */
    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;

    }

    /**
     * @param string $event
     * @param callable $listener
     * @return void
     */
    public function on(string $event, callable $listener)
    {
        $this->listeners[$event][] = $listener;
    }


    /**
     * @param string $event
     * @param ...$args
     * @return void
     */
    public function emit(string $event, ...$args)
    {
        $listeners = $this->listeners[$event];
        foreach ($listeners as $listener){
            $listener(...$args);
        }
    }


}