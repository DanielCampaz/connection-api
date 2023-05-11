<?php

interface Singleton {
    public static function Instance(): Singleton;
}