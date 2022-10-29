<?php

function loop_size(Node $node): int {
    $c = 0;

    while ($node) {
        if (isset($node->id)) {
            break;
        }

        $node->id = $c++;
        $node = $node->getNext();
    }


    return $c - $node->id;
}

function _loop_size(Node $node): int {
    $ids = [];
    $i = 0;

    while ($node) {
        $nodeId = spl_object_id($node);

        if (isset($ids[$nodeId])) {
            break;
        }

        $ids[$nodeId] = $i++;
        $node = $node->getNext();
    }

    return count($ids) - $ids[$nodeId];
}
