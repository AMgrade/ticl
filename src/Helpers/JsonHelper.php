<?php

declare(strict_types = 1);

namespace McMatters\Ticl\Helpers;

use McMatters\Ticl\Exceptions\JsonDecodingException;
use const JSON_ERROR_NONE;
use const true;
use function json_decode, json_last_error, json_last_error_msg;

/**
 * Class JsonHelper
 *
 * @package McMatters\Ticl\Helpers
 */
class JsonHelper
{
    /**
     * @param string $json
     * @param bool $associative
     * @param int $depth
     * @param int $options
     *
     * @return mixed
     *
     * @throws \McMatters\Ticl\Exceptions\JsonDecodingException
     */
    public static function decode(
        string $json,
        bool $associative = true,
        int $depth = 512,
        int $options = 0
    ) {
        $content = json_decode($json, $associative, $depth, $options);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new JsonDecodingException(json_last_error_msg());
        }

        return $content;
    }
}
