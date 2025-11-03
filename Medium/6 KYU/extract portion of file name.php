<?php

function fileNameExtractor(string $dirtyFileName): string {
    if (preg_match('/^\d+_(.+?)\.[^.]+$/', $dirtyFileName, $matches)) {
        return $matches[1];
    }
    return '';
}