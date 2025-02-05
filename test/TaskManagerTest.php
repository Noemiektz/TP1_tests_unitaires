<?php

namespace Noemi\Tp1TestsUnitaires;

use OutOfBoundsException;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertCount;

class TaskManagerTest extends TestCase
{
    public function testAddTask(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        assertCount(1, $taskManager->getTasks());
    }

    public function testGetTask(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $this->assertEquals("test", $taskManager->getTask(0));
    }

    public function testRemoveTask(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $taskManager->removeTask(0);
        assertCount(0, $taskManager->getTasks());
    }

    public function testGetTasks(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $taskManager->addTask("test1");
        assertCount(2, $taskManager->getTasks());
        $this->assertEquals("test", $taskManager->getTask(0));
        $this->assertEquals("test1", $taskManager->getTask(1));
    }

    public function testRemoveTaskAvecMauvaisId(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 30");
        $taskManager->removeTask(30);
    }

    public function testGetTaskAvecMauvaisId(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 30");
        $taskManager->getTask(30);
    }

    public function testTaskOrderAfterRemoval(){
        $taskManager = new TaskManager();
        $taskManager->addTask("test");
        $taskManager->addTask("test1");
        $taskManager->addTask("test2");
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 2");
        $taskManager->removeTask(1);
        $taskManager->getTask(2);
        $this->assertEquals("test2", $taskManager->getTask(1));
    }
}
