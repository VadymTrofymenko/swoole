<?php


abstract class Task
{
    public Closure $callable;

    public array $arguments;
}
