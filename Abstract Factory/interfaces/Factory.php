<?php

namespace interfaces;

interface Factory
{

    public function getAnalyzer() : TypeAnalyzer;

    public function getShuffler() : TypeShuffler;

}