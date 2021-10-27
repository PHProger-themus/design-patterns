<?php

namespace abstract_factory\interfaces;

interface Factory
{

    public function getAnalyzer() : TypeAnalyzer;

    public function getShuffler() : TypeShuffler;

}