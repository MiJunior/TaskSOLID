<?php

namespace classes\Services;


class TextService
{
    /**
     * @const string
     */
    const PROCESS_ADD_TAGS = 'Add tags';

    /**
     * @const string
     */
    const PROCESS_CLEAR_TAGS = 'Clear tags';

    /**
     * @param string $data
     * @return string
     */
    public function clearTags(string $data): string
    {
        return strip_tags($data);
    }

    /**
     * @param string $data
     * @return string
     */
    public function addTags(string $data): string
    {
        return "<p>{$data}</p><br>";
    }
}