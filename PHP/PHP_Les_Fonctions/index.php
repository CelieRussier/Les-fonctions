<?php
    function writeSecretSentence (string $animal, string $element) {
        return "$animal bows to $element";
    };
    echo writeSecretSentence ("cat", "earth");