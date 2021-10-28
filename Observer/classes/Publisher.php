<?php

namespace observer\classes;

use observer\interfaces\Subscriber;

class Publisher
{

    private array $subscribers = [];

    public function subscribe(Subscriber $subscriber, string $event = '*') : void
    {
        $this->subscribers[$event][] = $subscriber;
    }

    public function unsubscribe(Subscriber $subscriber, string $event = '*') : void
    {
        $key = array_search($subscriber, $this->subscribers[$event], true);
        if ($key !== false) {
            unset($this->subscribers[$event][$key]);
        }
    }

    private function getEventSubscribers(string $event)
    {
        $subscribers = $this->subscribers[$event] ?? [];
        return array_merge($subscribers, $this->subscribers['*']);
    }

    public function notify(string $event, string $data)
    {
        $subscribers = $this->getEventSubscribers($event);
        foreach ($subscribers as $subscriber) {
            $subscriber->update($event, $data);
        }
    }

    // Publisher can have business logic

    public function insertData(array $data, string $table)
    {
        $sql = "INSERT INTO $table VALUES " . implode(', ', $data);
        echo "Inserting SQL query '$sql'<br />";
        $this->notify('insert', $sql);
    }

    public function removeData(array $ids, string $table)
    {
        $sql = "DELETE FROM $table WHERE id IN (" . implode(', ', $ids) . ")";
        echo "Deleting SQL query '$sql'<br />";
        $this->notify('delete', $sql);
    }

}