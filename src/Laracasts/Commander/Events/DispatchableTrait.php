<?php  namespace Laracasts\Commander\Events;

 use App;

 trait DispatchableTrait {
     /**
      * The Dispatcher instance.
      *
      * @var Dispatcher
      */
     protected $dispatcher;

     /**
      * Dispatch all events for an entity.
      *
      * @param object $entity
      */
     public function dispatchEventsFor($entity)
     {
         return $this->getDispatcher()->dispatch($entity->releaseEvents());
     }

     /**
      * Get the event dispatcher.
      *
      * @return Dispatcher
      */
     public function getDispatcher()
     {
         return $this->dispatcher ?: App::make('Laracasts\Commander\Events\EventDispatcher');
     }
     
     /**
      * Set the dispatcher instance.
      *
      * @param mixed $dispatcher
      */
     public function setDispatcher($dispatcher)
     {
         $this->dispatcher = $dispatcher;
     }
 }
